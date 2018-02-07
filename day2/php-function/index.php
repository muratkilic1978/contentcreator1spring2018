<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Function</title>
</head>
<body>
    
    <?php  
        function printoutMyName($name) {
            echo "<h1>Hi, my name is $name</h1>";
        }
    
        function plusTwoNumbers() {
            echo 17 + 3;
        }
    ?>
    
    <h1><?php 
            printoutMyName("Viktor");
            printoutMyName("Sarah");
            #plusTwoNumbers();
        ?>
    </h1>
        
    
        
</body>
</html>