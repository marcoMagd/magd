<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Elige la opción deseada</h1>
        <form method="get" action="index.php">
            <input type="submit" name="detector_1" id="d_1" value="a"/>
            <input type="submit" name="detector_2" id="d_2" value="b"/>
            <input type="submit" name="detector_3" id="d_3" value="c"/>
            <input type="submit" name="detector_4" id="d_4" value="d"/>
            <input type="submit" name="detector_5" id="d_5" value="e"/>
        </form>
        <?php
            $prueba = FALSE;
            if(isset($_GET['detector_1'])){
                echo '<p>Eligió la opción a</p>';
            } else if(isset($_GET['detector_2'])){
                echo '<p>Eligió la opción b</p>';
            } else if(isset($_GET['detector_3'])){
                echo '<p>Eligió la opción c</p>';
            } else if(isset($_GET['detector_4'])){
                echo '<p>Eligió la opción d</p>';
            } else if (isset($_GET['detector_5'])){
                echo '<p>Eligió la opción e</p>';
            }
        ?>
    </body>
</html>
