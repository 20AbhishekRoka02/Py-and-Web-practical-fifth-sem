<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions in PHP</title>
    <style>
        h1 {
            text-align: center;
        }

        table {
            border: solid black 1px;
            border-collapse: collapse;
        }

        th,
        td {
            border: solid black 1px;
            padding: 5px;
            text-align: center;

        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>function</th>
                
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>substr(original_string, start_index, no_of_characters)</td>
                <td>
                <?php 
                    // substr("Hello, World!",3,5);
                    print('substr("Hello, World!",3,5); is '.substr("Hello, World!",3,5));
                ?>
                </td>
            </tr>
            <tr>
                
                <td>strpos(source_string, search_string, start_position) //Case-Sensitive<br>stripos(source_string, search_string, start_position) //Case-insensitive</td>
                <td>
                    <?php 
                        $sentence = "Hi, I am Abhishek Roka. I am a Python Developer.";
                        print("sentence is: ".$sentence);
                        print("<br>");
                        print("strpos(sentence, 'Python',4) gives ".strpos($sentence, 'Python',4));
                        print("<br>");
                        print("strpos(sentence, 'Python',4) gives ".stripos($sentence, 'python',4));
                    ?>
                </td>
            </tr>
            <tr>
                <td>str_replace(substring, new_substring, string, count) <br>str_ireplace(substring, new_substring, string, count) </td>
                <td>
                    <p><b>Example:</b> str_replace()</p>
                    <?php 
                    $count=0;
                    $str = "Java is a programming language.";
                    print("str is: $str<br>count is: $count<br>");
                    print("After str_replace('Java','Python',str,count), str is:-<br>".str_replace("Java","Python",$str,$count));
                    print("<br>");
                    print("count value is: ".$count);
                    ?>
                    <p><b>Example:</b> str_ireplace()</p>
                    <?php 
                    $count=0;
                    $str = "Java is a programming language.";
                    print("str is: $str<br>count is: $count<br>");
                    print("After str_ireplace('java','Python',str,count), str is:-<br>".str_replace("java","Python",$str,$count));
                    print("<br>");
                    print("count value is: ".$count);
                    ?>
                </td>
            </tr>
            <tr>
                <td><p>Converting to char from ASCII</p><p>chr(int &lt;ascii value&gt;)</p></td>
                <td>
                    <?php 
                        $ascii = 112;
                        print("ascii=112;<br>chr(ascii) is: ".chr(($ascii)));
                    
                    ?>
                </td>
            </tr>
            <tr>
            <td><p>Converting to ASCII from int</p><p>ord(string &lt;character&gt;)</p></td>
                <td>
                    <?php 
                        $char = '?';
                        print("char='?';<br>ord(char) is: ".ord(($char)));
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td>strlen(string)</td>
                <td>
                    <?php
                    print("Length of 'Unix': ".strlen('Unix'));
                    ?>
                </td>
            </tr>
            <tr>
                <td>str_word_count(string)</td>
                <td>
                    <?php
                        print("Words in 'Hello, World!': ".str_word_count('Hello, World!'));
                    ?>
                </td>
            </tr>
            <tr>
                <td><p>Trim white spaces:-</p>
                <p><b>ltrim()</b> - Trim whitespace from left</p>
                <p><b>rtrim()</b> - Trim whitespace from right</p>
                <p><b>trim()</b> - Trim whitespace from both sides</p>
                </td>
                <td>
                    <?php
                        $str="   Hello,   World   !    ";
                        // print("str is $str <br>"); - auto matcially trims from both sides.
                        print("orginal str length: ".strlen($str));
                        print("<br>");
                        print("ltrim(str) lenght is: ".strlen(ltrim($str)));
                        print("<br>");
                        print("rtrim(str) lenght is: ".strlen(rtrim($str)));
                        print("<br>");
                        print("trim(str) lenght is: ".strlen(trim($str)));
                    ?>
                </td>
            </tr>
            <tr>
                <td>wordwrap(string, width, break, cut)</td>
                <td>
                    <?php
                        $str = "Today is Thursday!";
                        print("str is $str<br>");
                        print("wordwrap(str, 5, '<br>', false) is: <br>".wordwrap($str, 5, '<br>', true))
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Changing string case:-</p>
                    <p>strtoupper(str)</p>
                    <p>strtolower(str)</p>
                </td>
                <td>
                    <?php
                        print("strtoupper('hello') -> ".strtoupper('hello'));
                        print("<br>strtolower('HELLO') -> ".strtolower('HELLO'));
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Capitalize first letter of every word:-</p>
                    <p>ucwords(str)</p>
                </td>
                <td>
                    <?php
                        print("ucwords('Today is thursday') -> ".ucwords('Today is thursday'));
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>