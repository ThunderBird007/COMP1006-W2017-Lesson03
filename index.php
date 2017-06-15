<?php
 $age = 25;

?>

<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
        <title>COMP1006 - Lesson03 PHP</title>
        <!-- CSS Section -->
        <link rel="stylesheet" href="content/app.css">
    </head>    
    <body>  
        <div>
            <h1></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
               Officia repudiandae pariatur, nostrum unde sit perspiciatis voluptatum.</p>

            <label>
                <?php 
                    echo $age;
                ?></label>
        </div>    



        <!-- JavaScript Section -->
        <script src="scripts/app.js"></script>
    </body>
</html>    