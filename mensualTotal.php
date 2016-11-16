<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Rozha+One|Sumana:700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="master.css">
    <title>Cáritas de Tampico, AC.</title>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand" style="font-family: 'Rozha One', serif;"><img src="logo.png" class="img-logo"/><span class="blue">Cáritas de Tampico, CA.</span></a>
        </div>
      </div>
    </nav>
      <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
          <div>
            <h3 class="text-center blue">Mes a consultar</h3>
              <form action="mensualTotal_POST.php" method="POST">
                <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-soffset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                  <div class="row">
                    <select class="form-control" multiple name="month" required>
                      <option value="2017-01">2017-01-00</option>
                      <option value="2017-02">2017-02-00</option>
                      <option value="2017-03">2017-03-00</option>
                      <option value="2017-04">2017-04-00</option>
                      <option value="2017-05">2017-05-00</option>
                      <option value="2017-06">2017-06-00</option>
                      <option value="2017-07">2017-07-00</option>
                      <option value="2017-08">2017-08-00</option>
                      <option value="2017-09">2017-09-00</option>
                      <option value="2017-10">2017-10-00</option>
                      <option value="2016-11">2016-11-00</option>
                      <option value="2016-12">2016-12-00</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <input type="submit" value="Ir" class="btn btn-info pull-right">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
