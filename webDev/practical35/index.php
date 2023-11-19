<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Form</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = "";
        $rno = "";
    ?>
        <form action="index.php" method="post">
            <div>
                <input type="text" name="name" placeholder="Enter name">

                <?php
                if (empty($_POST['name'])) {
                ?>
                    <span style="color: red; font-weight: bold;"> <?php echo "Name is required" ?> </span>
                <?php

                } else {
                    $name = $_POST['name'];
                } ?>


            </div>
            <div>
                <input type="text" name="rno" placeholder="Enter Roll number">
                <?php
                if (empty($_POST['rno'])) {
                ?>
                    <span style="color: red; font-weight: bold;"> <?php echo "Roll number is required" ?> </span>
                <?php

                } else {
                    $rno = $_POST['rno'];
                } ?>

            </div>
            <div>
                <input type="submit">
            </div>
        </form>
        <?php if (!empty($_POST['name'] && !empty($_POST['rno']))) {
        ?>
            <p><?php echo ("Your name: " . $name); ?> </p>
            <p><?php echo ("Your Roll no: " . $rno); ?> </p>


    <?php }
    } ?>

</body>

</html>