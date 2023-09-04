<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        p{
            text-align: center;
            margin: 10px 0 10px 0;
            padding: 0;
        }
        hr{
            border: 2px solid black;
        }
        .card_container{
            display: grid;
            flex-direction: row;
            grid-template-columns: 1fr 1fr 1fr;
        }
        .card{
            margin: 5mm;
            border: 3px solid black;
            border-radius: 15px;
            width: 60mm;
        }
    </style>
<?php
if(isset( $_POST['button_id']))
{

    //$filename = $_POST['pole1'];

    //$path_parts = pathinfo($_POST['pole1']);
    // $fileway = $path_parts['dirname']."/".$path_parts['basename'];

    // $filename = "C:/Users/User/Desktop/testtest.csv";

    $path_parts = pathinfo($_POST['pole1']);
    $fileway = "C:/Users/User/Desktop/".$path_parts['basename'];

 $lines = @file($fileway);
 echo '<div class="card_container">';
 foreach ($lines as $line) {   
    echo '<div class="card">';
    $params = explode(';', $line);
    echo '<p>имя: ',$params[0],'</p>';
    echo '<hr>';
    echo '<p>статус: ',$params[1],'</p>';
    echo '<hr>';
    echo '<p>номер: ',$params[2],'</p>';
    echo '</div>';
 }
}
 echo '</div>';
?>
    <form  method="POST" <?php if(isset( $_POST['button_id'])) {echo " style='display: none'"; } ?> >
    <input  type='file' name='pole1' >
    <p><input  type="submit" name="button_id" value="OK" /></p>
</form>
</body>
</html>
