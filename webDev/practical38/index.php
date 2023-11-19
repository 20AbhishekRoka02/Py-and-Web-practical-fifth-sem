<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read XML</title>
</head>
<body>
    <?php
        $data = simplexml_load_file('student.xml');
        if(!$data){
            print("Error");
        } else{
            // print("Congo!");
            $counter=1;
            foreach ($data as $key => $value) {                
                print("Student no.: ".$counter);
                print("<br>");
                print("Student Roll No.: ".$value->rno);
                print("<br>");
                print("Student Name: ".$value->name);
                print("<br>");
                $counter++;
            }

            // print($data->student[4]->name);
        }

    
    ?>
    
</body>
</html>