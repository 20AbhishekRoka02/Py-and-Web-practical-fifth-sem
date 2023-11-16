<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Things</title>
</head>
<body>
    <section>
        <form action="index.php" method="POST">
            <div>
                <input type="text" name="name" placeholder="Enter name">
            </div>
            <div>
                <input type="email" name="email" placeholder="example@xyz.com">
            </div>
            <div>
                <input type="url" name="twitter" placeholder="Twitter profile link">
            </div>
            <div>
                <p>Gender</p>
                <div  style="margin-left: 50px;">
                    <div>
                        <label for="male">Male</label>
                        <input type="radio" id="male" name="gender" value="male">
                    </div>
                    <div>
                        <label for="female">Female</label>
                        <input type="radio" id="female" name="gender" value="female">
                    </div>
                </div>
            </div>
            <div style="margin-top: 10px;">
                <input type="submit">
            </div>
        </form>

        <?php
        function badTrimmer($text){
            // $text = htmlspecialchars(stripslashes(trim($text)));
            $text = trim($text);
            $text = stripslashes($text);
            $text = htmlspecialchars($text);
            return $text;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name="";
            $email="";
            $twitter="";
            $gender="";
            if (!empty($_POST['name'])) {
                $name = $_POST['name'];
            } else { ?>
            <p style="color: red; font-weight: bold;">Your name is required</p>
            <?php return 0; 
            }
            
            if (!empty($_POST['email'])){
                $email = $_POST['email'];
            } else { ?>
                <p style="color: red; font-weight: bold;">Your email is required</p>
                <?php return 0; 
            }

            if (!empty($_POST['twitter'])){
                $twitter = $_POST['twitter'];
            } else { ?>
                <p style="color: red; font-weight: bold;">Your Twitter Profile is required</p>
                <?php return 0; 
            }

            if (!empty($_POST['gender'])) {
                $gender = $_POST['gender'];
            } else { ?>
                <p style="color: red; font-weight: bold;">Your gender information is required</p>
                <?php return 0; 
            }
        
            echo("Your trimmed text is: "); ?>
            <p> Your name: <?php echo(badTrimmer($name)); ?> </p>
            <p> Your email: <?php echo(badTrimmer($email)); ?> </p>
            <p> Your twitter profile: <?php echo(badTrimmer($twitter)); ?> </p>
            <p> Your gender: <?php echo(badTrimmer($gender)); ?> </p>



            
            
        <?php } ?>
            
    </section>
    
</body>
</html>