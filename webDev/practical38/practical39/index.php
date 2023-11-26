<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #auth-div {
        display: flex;
        border: 1px solid black;
        border-radius: 3px;
        justify-content: center;
    }

    form {
        margin-top: 10px;
        margin-bottom: 10px;
        display: flex;
        flex-direction: column;

    }
</style>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"];
        if (isset($_POST["pass"])) {
            setcookie("username", $username);
        } else {

            setcookie("username", "", time() - 3600);
        }
        header("Refresh:0");
    }
    ?>

    <?php
    if (!isset($_COOKIE["username"])) {


    ?>
        <div id="auth-div">
            <form action="index.php" method="post">
                <h1>Login Here!</h1>
                <input type="text" placeholder="username" name="username" required>
                <input type="password" placeholder="Password" required name="pass">
                <button type="submit">Submit</button>
            </form>

        </div>

    <?php
    } else {
    ?>
        <p>Hello, <?php echo $_COOKIE["username"]; ?>!</p>

        <form action="index.php" method="post">
            <p>To logout, please enter your username!</p>
            <input type="text" placeholder="username" name="username" required>
            <button type="submit">Logout</button>
        </form>
    <?php
    }
    ?>
</body>

</html>