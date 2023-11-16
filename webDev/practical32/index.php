<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming | Languages</title>
</head>
<body>
    <section>
        <ul>
            <?php
                $languages = array("Python","C","Java","JavaScript","Shell Scripting","C++","Dart");
                
                foreach($languages as $val){ ?>
            <li> <?php echo $val; ?> </li>    
            <?php }?>
                    
                
            
            
        </ul>
    </section>
</body>
</html>