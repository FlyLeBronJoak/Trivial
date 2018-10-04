<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TRIVIAL EVAU</title>
        <link rel="shortcut icon" href="C:\Users\Administrator\Desktop\libro.jpg" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #004085">
        <div class="container" style="background-color: #666666">
            <div class="row">
                <div class="col-12" style="background-color: #999999">
                    <h1 class="text-center" style="color: white">TRIVIAL PARA PREPARAR LA EVAU</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                
                   
                </div>
                <div class="col-4">
                     <br/><br/>
                     
                    <h2 class="text-center" style="color: white">ELIGE ASIGNATURA</h2>
                    <br/><br/>
                    <button id="boton1" class="btn btn-primary btn-block" type="submit">HISTORIA</button>
                    <br/><br/>
                    
                    <button id="boton2" class="btn btn-primary btn-block" type="submit">FILOSOFÍA</button>
                    <br/><br/>
   
                    <button id="boton3" class="btn btn-primary btn-block" type="submit">INGLÉS</button>
                    <br/><br/>
                    
                    <button id="boton4" class="btn btn-primary btn-block" type="submit">ECONOMÍA</button>
                    <br/><br/>
                    
                    <button id="boton5" class="btn btn-primary btn-block" type="submit">LENGUA</button>
                    <br/><br/>

                    <br/><br/>
                     <h3 class="text-center" style="color: white">POR UN FUTURO DE GARANTÍAS</h3>
                    <br/><br/>
<br/><br/>

                    </form>
                </div>
                <div class="col-4">
                    <br>
                    <br>
                    <div class="col-2"></div>
                    <div class="col-2">
                    
                    <button id="boton1" class="btn-outline-info" type="submit">LOGIN</button></div>
                </div>
            </div>
            
        </div>
        
        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        // document ready se ejecuta cuando toda la pagina se ha cargado correctamente
        $(document).ready(function(){
            $('#cajaNombre').hide();
        });
        
        $.validate({
            lang: 'es'
        })
        
        
        $('#boton1').click(function(){
            console.log("aqui si llega");
            $('#cajaNombre').show(200);
            //$('#nombre').val("JUANPA CHUPA");
            //$('input[name=usuario_nombre]').val("JUANPA peina calvos");
        });
    </script>
</html>

