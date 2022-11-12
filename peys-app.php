<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <h1>Peys App</h1>
    <form method="post">
        <label for="photo_size">Select Photo Size: </label>
        <input type="range" name="photo_size" id="photo_size" min="10" max="100" step="10" value="60"><br>
        <label for="border_color">Select Border Color: </label>
        <input type="color" name="border_color" id="border_color"><br>
        <button type="submit" name="btn_process">
            Proccess
        </button>
        <br><br><br>

        <?php
            $photo_size = .6;
            $border_color = 'black';

            if(isset($_POST['btn_process'])){
                $photo_size = $_POST['photo_size'] * 0.01;
                $border_color = $_POST['border_color'];
            }
        ?>

        <img src="img/renmark.jpg" alt="" style="transform: scale(<?php echo $photo_size; ?>); border: <?php echo '10px solid ' . $border_color; ?>;">
    </form>
</body>
</html>