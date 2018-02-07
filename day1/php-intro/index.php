<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro PHP</title>
</head>
<body>
    <section class="sandboxphp">
        <h1><?php echo "Murat Kilic"; ?></h1>
        <h2><?php print 'My Favourite football club is Galatasaray!' ?></h2>
        
        <?php 
            $firstname = "Emil";
            $firstname2 = "Daniel";
            $firstname3 = "Sara";
            $specialfirstname = "Trumph";
        ?>
        <h1><?php echo $firstname; ?></h1>
        <h1><?php echo $firstname2;
        ?></h1>
        <h1><?php echo $firstname3;  ?></h1>
        <h1><?php echo $firstname .' Lauridsen'; ?></h1>
        
        <?php 
            $Money = '10000';
            $money = '1';
        
        echo "<h1>$money + $Money</h1>";
        ?>
        <?php
        //single php comment
        # single PHP Comment
        /* Multi-line comments in
        PHP
        
        */
        ?>
        <?php 
        $studentsnames = array("Murat","Jeanne","Michael", "Birgitte","Marlene");
        
        //echo "<h1>".$studentsnames[2]."</h1>";
        
        /*foreach ($studentsnames as $writenames) {
            echo "<li>".$writenames."</li>";
        }
        
        
        
        */?>
        
        
    </section>
</body>
</html>