<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Country and Capital</title>
</head>
<body>
    <section>
        <table style="border: 1px solid black; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="border: 1px solid black;">Country Name</th>
                    <th style="border: 1px solid black;">Capital</th>
                </tr>
            </thead>
            <tbody>
            <?php

                $country_caps = array(
                    "India"=>"New Delhi",
                    "USA"=>"Washington DC",
                    "Ireland"=>"Dublin"
                );
                
                reset($country_caps);
                foreach ($country_caps as $key => $value) {
            ?>
            <tr>
                <td style="border: 1px solid black;"> <?php echo $key; ?> </td>
                <td style="border: 1px solid black;"> <?php echo $value; ?></td>
            </tr>

            <?php } ?>
                
            </tbody>
    
            

        </table>
            
        
     
    </section>
    
</body>
</html>