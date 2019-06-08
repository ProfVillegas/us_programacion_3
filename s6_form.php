<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title> Crear cuentas </title>
        
    </head>
    
    <body>
        <form id="CrearCuenta">
            <table>
                <tr>
                    <td>Numero de cuenta</td><td>Crear</td>
                </tr>
                <tr> 
                    <td><input type="text" name="n_cuenta"></td>
                    <td><input type="button" id="btnCrear" value="Crear" name="enviar"></td>
                </tr>
            </table>
        </form>
        <table id="Cuentas">
            <tr>
                <th>N. cliente</th><th>Nombre</th><th>N. cuenta</th><th>operaciones</th>
            </tr>
        </table>
        <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function(){
                $("#btnCrear").click(function(e){
                    e.preventDefault();
                    //Petición AJAX
                    $.ajax({
                        url:"s6_controlador.php",
                        data:$("#CrearCuenta").serialize(),
                        type:"POST",
                        success:function(r){
                            console.log(r);
                        }
                    });
                    
                    //Agregar fila nueva
                    $("#Cuentas").append($("<tr>").append("<td>-</td><td>-</td><td>-</td><td><a class='delete' href='#'>Elimiar</a></td>"));
                });
                
                //Eliminar cuenta
                $("#Cuentas").on('click','a.delete',function(){
                    $(this).parent().parent().remove();
                });
            });
        </script>
    </body>
</html>