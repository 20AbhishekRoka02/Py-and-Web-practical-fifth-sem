<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, Student</title>
</head>

<body>
    <section>
        <form action="index.php" method="POST">
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="rno">Roll no</label>
                <input type="text" id="rno" name="rno">
            </div>
            <div>
                <input type="submit">
            </div>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST['name']) && empty($_POST['rno'])){ ?>
                <p style="color: red; font-weight: bold;">Please enter Name and Roll no!</p>
                <?php } else{ ?>
                <p> <?php echo("Welcome ".$_POST['name']) ?> </p>
                <p> <?php echo("Your roll number is ".$_POST['rno']) ?> </p>
                <?php } 
                
                }
                ?>         
    </section>

</body>

</html>