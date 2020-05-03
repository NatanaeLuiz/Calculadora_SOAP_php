<?php

    $resultado = 0;
    if(isset($_POST['valor2'])){
        $soapClient = new SoapClient("http://localhost:8080/CalculadoraService/calculadoraWS?wsdl");
        //$options = array('location'=>"http://localhost:8080/CalculadoraService");
        //$params = array($_POST['valor1'], $_POST['valor2']);
        $params = array('a' => $_POST['valor1'],'b' => $_POST['valor2']);
        
        if(isset($_POST['soma'])){
            $function='somar';
            $resultado = $soapClient->somar($params);
        }
        else if(isset($_POST['subtrair'])){
            $function='subtrair';
            $resultado = $soapClient->subtrair($params);
        }
        else if(isset($_POST['multiplicar'])){
            $function='multiplicar';
            $resultado = $soapClient->multiplicar($params);
        }
        else if(isset($_POST['dividir'])){
            $function='dividir';
            $resultado = $soapClient->dividir($params);
        }
        
        //$resultado = $soapClient->__soapCall($function, $params);
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>CALCULADORA</title>
    </head>
    <body>
        <center>
            <h2>CALCULADORA</h2>
        
            <form name="formulario" method="post" action="index.php">
                <p><label>Valor 1</label><input type="text" name="valor1" size="30"></p>
                <p><label>Valor 2</label><input type="text" name="valor2" size="30"></p>
                
                
                <p><input type="submit" name="soma" value="soma">
                    <input type="submit" name="subtrair" value="subtrair">
                    <input type="submit" name="multiplicar" value="multiplicar">
                    <input type="submit" name="dividir" value="dividir"></p>
            </form>

            <table>
                <tr>
                    <th>
                        Resultado:
                    </th>
                    <td>
                        <?php
                        print_r($resultado);
                        ?>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>