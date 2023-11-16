<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php 
        
        
        function factorial($val){
            if ($val == 1){
                return 1;
            } else {
                return $val * factorial($val-1);
            }
        }

        // $num = (int) readline("Enter number: ");
        // echo "Factorial of $num is: ".factorial($num);

        
    ?>
    <form action="" method="post">
        <input type="number" placeholder="Enter data">
        <button type="submit">Submit</button>

    </form>

    <script>
        
    </script>
        
</body>
</html>