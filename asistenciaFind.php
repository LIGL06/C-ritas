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
            <h1 class="text-center blue">Buscar asistencia</h1>
            <form action="index_POST.php" method="POST">
              <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-soffset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                <div>
                  <select class="form-control" multiple name="centre" required>
                    <option value="Nuevo Madero">Nuevo Madero</option>
                    <option value="Rev. Verde Madero">Rev. Verde Madero</option>
                    <option value="Lomas de Miralta">Lomas de Miralta</option>
                    <option value="Sol. Vol. y Trab. No.1">Sol. Vol. y Trab. No.1</option>
                    <option value="Monte Alto No. 3">Monte Alto No. 3</option>
                    <option value="Alejandro Briones">Alejandro Briones</option>
                    <option value="Monte Alto">Monte Alto</option>
                    <option value="Serapio Venegas">Serapio Venegas</option>
                    <option value="Albañiles">Albañiles</option>
                    <option value="Bahía">Bahía</option>
                    <option value="Ampl. Nvo. Madero">Ampl. Nvo. Madero</option>
                    <option value=" Adelitas"> Adelitas</option>
                    <option value="Emiliano Zapata">Emiliano Zapata</option>
                    <option value="Club Amistad (Bahía)">Club Amistad (Bahía)</option>
                    <option value="San Esteban">San Esteban</option>
                    <option value="Melchor Ocampo">Melchor Ocampo</option>
                    <option value="Carrillo Puerto">Carrillo Puerto</option>
                    <option value="Ampl. Rev. Verde Madero">Ampl. Rev. Verde Madero</option>
                    <option value="Ejido Miramar">Ejido Miramar</option>
                    <option value="Doctor F. Guall">Doctor F. Guall</option>
                    <option value="Unidad Satelite">Unidad Satelite</option>
                    <option value="Los presidentes">Los presidentes</option>
                    <option value="15 de Mayo">15 de Mayo</option>
                    <option value="Enrique Cárdenas No. 2">Enrique Cárdenas No. 2</option>
                    <option value="Américo Villareal">Américo Villareal</option>
                    <option value="Tierra Negra">Tierra Negra</option>
                    <option value="Unidos Avanzamos">Unidos Avanzamos</option>
                    <option value="Natividad Garza Leal No. 2">Natividad Garza Leal No. 2</option>
                    <option value="Blanco 1">Blanco 1</option>
                    <option value=" Flores"> Flores</option>
                    <option value="Polvorín">Polvorín</option>
                    <option value="Ampl. Candelario Garza">Ampl. Candelario Garza</option>
                    <option value="Tinaco">Tinaco</option>
                    <option value="Natividad Garza Leal">Natividad Garza Leal</option>
                    <option value="Rev. Verde Tampico">Rev. Verde Tampico</option>
                    <option value="López Portillo No. 2">López Portillo No. 2</option>
                    <option value="Heriberto Kehoe">Heriberto Kehoe</option>
                    <option value="Conchitas">Conchitas</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Medalla Milagrosa">Medalla Milagrosa</option>
                    <option value="Blanco 2">Blanco 2</option>
                    <option value="Sahop no. 2">Sahop no. 2</option>
                    <option value="Hipódromo">Hipódromo</option>
                    <option value="Tampico-Altamira">Tampico-Altamira</option>
                    <option value="Quetzalcóatl">Quetzalcóatl</option>
                    <option value="Tancol">Tancol</option>
                    <option value="Magdaleno Aguilar">Magdaleno Aguilar</option>
                    <option value="Luis Donaldo Colosio">Luis Donaldo Colosio</option>
                    <option value="Laguna de Champayan">Laguna de Champayan</option>
                    <option value="Aeropuerto">Aeropuerto</option>
                    <option value="Echeverría">Echeverría</option>
                    <option value="Cascajal">Cascajal</option>
                    <option value="Nacional">Nacional</option>
                    <option value="México">México</option>
                    <option value="Santa Elena">Santa Elena</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Anáhuac">Anáhuac</option>
                    <option value="Moralillo">Moralillo</option>
                    <option value="Morelos 2">Morelos 2</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="Buscar" class="btn btn-info pull-right">
              </div>
            </form>
          </div>
        </div>
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>
