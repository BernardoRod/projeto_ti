<?php
session_start();
//echo($_SESSION['nome_utilizador']);
if (!isset($_SESSION['nome_utilizador'])) {
    header("refresh:5;url=index.php");
    die("acesso restrito");
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta http-equiv="refresh" content="5">
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard - Mansão 32 | Restaurante | Tapas | Winebar
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link href="./assets/css/styles.css" rel="stylesheet" />
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
        </a>
        <a class="simple-text logo-normal" id="imgLogo">
        <img src="img/logo.png" alt="">
      </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="nc-icon nc-chart-bar-32"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./luminosidade.php">
              <i class="nc-icon nc-bulb-63"></i>
              <p>Luminosidade</p>
            </a>
          </li>
          <li>
            <a href="./temperatura.php">
              <i class="nc-icon nc-sound-wave"></i>
              <p>Temperatura</p>
            </a>
          </li>
          <li>
            <a href="./janelas.php">
              <i class="nc-icon nc-share-66"></i>
              <p>Humidade</p>
            </a>
          </li>
          <li>
            <a href="./sensor_fumo.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Sensor De Fumo</p>
            </a>
          </li>
          <li>
            <a href="./logout.php">
              <i class="nc-icon nc-button-power"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
        </div>
      </nav>

      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-bulb-63 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category"><?php echo $nome_luminosidade; ?></p>
                      <p class="card-title"><?php echo $valor_luminosidade; ?>%<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  <?php echo $hora_luminosidade; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-sound-wave text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category"><?php echo $nome_temperatura; ?></p>
                      <p class="card-title"><?php echo $valor_temperatura;?>°C<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  <?php echo $hora_temperatura; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-share-66 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category"><?php echo $nome_humidade;?></p>
                      <p class="card-title"><?php echo $valor_humidade;?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  <?php echo $hora_humidade;?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-user-run text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category"><?php echo $nome_fumo; ?></p>
                      <p class="card-title"><?php echo $valor_fumo;?>g<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  <?php echo $hora_fumo; ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tabela de Sensores</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th> Tipo de dispositivo </th>
                      <th> Valor </th>
                      <th> Data de Atualização </th>
                      <th> Estado Alertas </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <?php echo $nome_temperatura; ?> </td>
                        <td> <?php echo $valor_temperatura; ?>°</td>
                        <td> <?php echo $hora_temperatura; ?> </td>
                        <td> Desativado </td>
                      </tr>
                      <tr>
                        <td> <?php echo $nome_luminosidade; ?> </td>
                        <td> <?php echo $valor_luminosidade; ?>%</td>
                        <td> <?php echo $hora_luminosidade; ?> </td>
                        <td> Ativo </td>
                      </tr>
                      <tr>
                        <td> <?php echo $nome_humidade; ?> </td>
                        <td> <?php echo $valor_humidade; ?></td>
                        <td> <?php echo $hora_humidade; ?> </td>
                        <td> Desativado </td>
                      </tr>
                      <tr>
                        <td> <?php echo $nome_fumo; ?> </td>
                        <td> <?php echo $valor_fumo; ?>g</td>
                        <td> <?php echo $hora_fumo; ?> </td>
                        <td> Ativo </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

       <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, by LIFE'SMART
              </span>
            </div>
          </div>
        </div>
      </footer> 

    </div>
  </div>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>
</html>