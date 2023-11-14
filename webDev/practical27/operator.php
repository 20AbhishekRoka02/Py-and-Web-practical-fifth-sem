<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
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
    <h1>
        Operators in PHP
    </h1>
    <div>
        <h2>Unary Operator</h2>
        <table>
            <caption>Negation Operators</caption>
            <thead>
                <tr>
                    <th>Operator Name</th>
                    <th>Opeartor </th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Logical Negation</td>
                    <td>!</td>
                    <td>
                        <?php
                            $bin = 0;
                            print("bin= 0 and !bin= ".!$bin)
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Bitwise Negation</td>
                    <td>~</td>
                    <td>
                        <?php
                            $bin = 1;
                            print("bin= 1 and !bin= ".~$bin);
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <caption>Increment/Decrement Operators</caption>
            <thead>
                <tr>
                    <th>Operator Name</th>
                    <th>Opeartor </th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Post Increment</td>
                    <td>$variable++</td>
                    <td>
                        <?php
                            $bin = 0;
                            print("bin= 0 and !bin= ".$bin++)
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Pre Increment</td>
                    <td>++$variable</td>
                    <td>
                        <?php
                            $bin = 0;
                            print("bin= 0 and !bin= ".++$bin);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Post Decrement</td>
                    <td>$variable--</td>
                    <td>
                        <?php
                            $bin = 0;
                            print("bin= 0 and !bin= ".$bin--);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Pre Decrement</td>
                    <td>--$variable</td>
                    <td>
                        <?php
                            $bin = 0;
                            print("bin= 0 and !bin= ".--$bin);
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h2>Binary Operator</h2>
        <table>
            <caption>Numeric Operator</caption>
            <thead>
                <tr>
                    <th>Operator Name</th>
                    <th>Opeartor </th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Addition</td>
                    <td>+</td>
                    <td>
                        <?php
                            $n1 = 1;
                            $n2 = 2;
                            print("n1= 1<br>n2= 2<br>n3= ".($n1 + $n2));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Subtraction</td>
                    <td>-</td>
                    <td>
                        <?php
                            $n1 = 1;
                            $n2 = 2;
                            print("n1= 1<br>n2= 2<br>n3= ".($n1 - $n2));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Multiplication</td>
                    <td>*</td>
                    <td>
                        <?php
                            $n1 = 1;
                            $n2 = 2;
                            print("n1= 1<br>n2= 2<br>n3= ".($n1 * $n2));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Division</td>
                    <td>/</td>
                    <td>
                        <?php
                            $n1 = 1;
                            $n2 = 2;
                            print("n1= 1<br>n2= 2<br>n3= ".($n1 / $n2));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Modulus (Division remainder)</td>
                    <td>%</td>
                    <td>
                        <?php
                            $n1 = 1;
                            $n2 = 2;
                            print("n1= 1<br>n2= 2<br>n3= ".($n1 % $n2));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>
                        <?php
                            $n1 = 1;
                            $n2 = 2;
                            print("n1= 1<br>n2= 2<br>n3= ".($n1 - $n2));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Post Increment</td>
                    <td>$variable++</td>
                    <td>
                        <?php
                            $bin = 0;
                            print("bin= 0 and !bin= ".$bin++)
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Pre Increment</td>
                    <td>++$variable</td>
                    <td>
                        <?php
                            $bin = 0;
                            print("bin= 0 and !bin= ".++$bin);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Post Decrement</td>
                    <td>$variable--</td>
                    <td>
                        <?php
                            $bin = 0;
                            print("bin= 0 and !bin= ".$bin--);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Pre Decrement</td>
                    <td>--$variable</td>
                    <td>
                        <?php
                            $bin = 0;
                            print("bin= 0 and !bin= ".--$bin);
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h1>Concatenation Operator</h1>
        <table>
            <thead>
                <tr>
                    <th>Operator Name</th>
                    <th>Opeartor </th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Concatenation</td>
                    <td>.</td>
                    <td>
                        <?php
                            $month=10;
                            print "month=10<br>The month is ".$month;
                        ?>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</body>

</html>