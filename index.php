<!DOCTYPE html>
<html lang="es">
     <head>
     <meta charset="utf-8"/>
     <title>Modulo producción</title>
     <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     </head>
     <body>

           <header id="cabecera">
               <div id="logo">
                   <a href="index.php">
                   Oube
                   </a>
               </div>
               <nav id="menu">
                    <ul>
                         <li>
                            <a href="index.php">Inicio</a>
                         </li>
                         <li>
                            <a href="maqueta.php">Maqueta</a>
                         </li>
                         <li>
                            <a href="informacion.php">Informacion</a>
                         </li>
                         <li>
                            <a href="index.php">Datos</a>
                         </li>
                         <li>
                            <a href="index.php">Sobre mi</a>
                         </li>
                         <li>
                            <a href="index.php">Contacto</a>
                         </li>
                    </ul>
               </nav>

               <div class="clearfix"></div>
           </header>
           <div id="contenedor">

                <aside id="sidebar">
                    <div id="login"  class="bloque">
                     <h3>Modulo de producción</h3>
                     <form method="post" action="index.php" >

                      <fieldset>
                      <label for="modulo" required="required"><strong>Medidas:</strong></label><br>

                         <label for="ancho" ><strong>Ancho :</strong></label>
                         <input type="number" name="ancho" autofocus value="<?php if (isset($_POST['ancho'])){echo $_POST['ancho'];}?>" /><br>
                     
                         <label for="largo" ><strong>Largo :</strong></label>
                         <input type="number" name="largo" value="<?php if (isset($_POST['largo'])){echo $_POST['largo'];}?>"  />
                         <br>
                         
                       </fieldset>
                       <br>
                      <fieldset>
                         <label for="modulo" required="required"><strong>Tipo Banda modular:</strong></label><br>

                         Simple<input <?php if (isset($_POST['modulo']) && $_POST['modulo'] == "Simple") { echo "checked";}; ?> type="radio" name="modulo" value="Simple"/>
                         30mm <input <?php if (isset($_POST['modulo']) && $_POST['modulo'] == "Cang. 30mm") { echo "checked";}; ?>  type="radio" name="modulo" value="Cang. 30mm"/>
                         50mm <input <?php if (isset($_POST['modulo']) && $_POST['modulo'] == "Cang. 50mm") { echo "checked";}; ?> type="radio" name="modulo" value="Cang. 50mm"/>
                         75mm <input <?php if (isset($_POST['modulo']) && $_POST['modulo'] == "Cang. 75mm") { echo "checked";}; ?> type="radio" name="modulo" value="Cang. 75mm"/>
                         <br><br>
                         <hr>
                         

                        <label for="Borde" ><strong>Borde banda modular:</strong></label><br>

                         27mm:<input <?php if (isset($_POST['Borde']) && $_POST['Borde'] == "27") { echo "checked";}; ?> type="radio" name="Borde" value="27"/>
                         36mm:<input <?php if (isset($_POST['Borde']) && $_POST['Borde'] == "36") { echo "checked";}; ?> type="radio" name="Borde" value="36"/>
                         45mm:<input <?php if (isset($_POST['Borde']) && $_POST['Borde'] == "45") { echo "checked";}; ?> type="radio" name="Borde" value="45"/>
                         54mm:<input <?php if (isset($_POST['Borde']) && $_POST['Borde'] == "54") { echo "checked";}; ?> type="radio" name="Borde" value="54"/>
                         <br>
                         <br>
                      </fieldset>

                      <input type="submit" value="Ver resultado"/>
                      
                      
                     </form>

                     <form id="oculto" method="post" action="generar-pdf.php" >
                     <input type="submit" value="Ver PDF" id="refresh"/>
                     <div style="visibility: hidden">
                         <input type="number" name="ancho" autofocus value="<?php if (isset($_POST['ancho'])){echo $_POST['ancho'];}?>" />
                         <input type="number" name="largo" value="<?php if (isset($_POST['largo'])){echo $_POST['largo'];}?>"  />
                         <input <?php if (isset($_POST['modulo']) && $_POST['modulo'] == "Simple") { echo "checked";}; ?> type="radio" name="modulo" value="Simple"/>
                          <input <?php if (isset($_POST['modulo']) && $_POST['modulo'] == "Cang. 30mm") { echo "checked";}; ?>  type="radio" name="modulo" value="Cang. 30mm"/>
                          <input <?php if (isset($_POST['modulo']) && $_POST['modulo'] == "Cang. 50mm") { echo "checked";}; ?> type="radio" name="modulo" value="Cang. 50mm"/>
                          <input <?php if (isset($_POST['modulo']) && $_POST['modulo'] == "Cang. 75mm") { echo "checked";}; ?> type="radio" name="modulo" value="Cang. 75mm"/>
                         <input <?php if (isset($_POST['Borde']) && $_POST['Borde'] == "27") { echo "checked";}; ?> type="radio" name="Borde" value="27"/>
                         <input <?php if (isset($_POST['Borde']) && $_POST['Borde'] == "36") { echo "checked";}; ?> type="radio" name="Borde" value="36"/>
                         <input <?php if (isset($_POST['Borde']) && $_POST['Borde'] == "45") { echo "checked";}; ?> type="radio" name="Borde" value="45"/>
                         <input <?php if (isset($_POST['Borde']) && $_POST['Borde'] == "54") { echo "checked";}; ?> type="radio" name="Borde" value="54"/>
                      </div>
                     </form>       
                    </div>

                 </aside>

               <div id="principal"> 
                   <?php include 'resultado.php'?>
                   
               </div>
              
               

               

               <div class="clearfix"></div>

            </div>
            <footer id="pie">
               <p>&copy; Power by  <a href="https://www.linkedin.com/company/bokend">Bokend</a>,  <?=date('Y')?></p> 
            </footer>
     </body>




</html>