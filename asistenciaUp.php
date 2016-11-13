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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="well">
            <h3 class="text-center blue">Nueva Asistencia</h3>
            <form style="margin-top:20px;">
              <div class="form-group">
                <label for="nombre">Nombre del Beneficiario</label>
                <input type="text" name="nombre" class="form-control">
              </div>
            </form>
            <button type="submit" href="" class="btn btn-danger pull-right">Guardar</button>
            <button id="cancel" href="" class="btn btn-danger pull-left">Cancelar</button>
          </div>
        </div>
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(':input').val();
        $(':button').hide();
      });
    </script>
  </body>
</html>
