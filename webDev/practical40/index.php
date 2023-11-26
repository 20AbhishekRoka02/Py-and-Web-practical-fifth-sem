<style>
  table{
    border: 1px solid black;
    border-collapse: collapse;
  }
  td, th{
    border: 1px solid black;
    padding: 4px;
  }

</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "institute";



// Creating connection to create a database
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
// Creating database
mysqli_query($conn, "create database $database");
mysqli_close($conn);

// Access database and perform tasks
$conn = new mysqli($servername, $username, $password, $database);

// Checking connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Starting transaction as XAMPP supports InnoDB and I have to commit changes to database
// $conn->begin_transaction();

mysqli_query($conn, "Create table student(student_id char(4), student_name varchar(50), branch varchar(10))");

mysqli_query($conn, "insert into student values('0001','Amit','DCE'),('0002','Bhuvan','DCE')");

mysqli_query($conn, "update student set student_name='Abhishek' where student_id='0001'");

$result = mysqli_query($conn, "select * from student");
?>

<table>
  <caption>Records in table are as follows:-</caption>
  <thead>
    <tr>
      <th>student_id</th>
      <th>student_name</th>
      <th>branch</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result) {
      $records = array();
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <td>
            <?php echo $row['student_id']; ?>
          </td>
          <td>
            <?php echo $row['student_name']; ?>
          </td>
          <td>
            <?php echo $row['branch']; ?>
          </td>
        </tr>
    <?php
      }
    }
  
    ?>
  </tbody>
</table>




<?php 
mysqli_query($conn,"delete from student where student_id='0002'");

mysqli_close($conn);


?>