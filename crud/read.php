<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Reading data from Database</title>
</head>

<body>

<?php
// access data from database in php code
    $sql = "SELECT * from EMPLOYEE;";  // sql statements to query in the database
    $result = mysqli_query($conn, $sql);  // querying the DB using $conn and $sql attributes
    $resultCheck = mysqli_num_rows($result);  // check if we got result from the DB
                                   //  mysqli_num_rows() returns 0, if no result found in DB

// If we have got result from DB, we are reading it
  if ($resultCheck > 0) {
     while($row = mysqli_fetch_assoc($result)) {
        // assign all the fetched data from DB to a variable $row
           echo $row['EMPNO'] ." ". $row['FIRSTNAME'] ." ". $row['LASTNAME'] ." ". $row['WORKDEPT'] . "<br>";  // write-out the data onto a Webpage
     }
}
/*
echo "<table border="1">
<tr>
  <th>EMPNO</th>
  <th>FIRSTNAME</th>
  <th>LASTNAME</th>
  <th>WORKDEPT</th>
  <th>PHONENO</th>
  <th>HIREDATE</th>
  <th>SALARY</th>
</tr>";

if ($resultCheck > 0) {
// assign all the fetched data from DB to a variable $row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>"
    echo "<td>" . $row['EMPNO'] . "</td>";
    echo "<td>" . $row['FIRSTNAME'] . "</td>";
    echo "<td>" . $row['LASTNAME'] . "</td>";
    echo "<td>" . $row['WORKDEPT'] . "</td>";
    echo "<td>" . $row['PHONENO'] . "</td>";
    echo "<td>" . $row['HIREDATE'] . "</td>";
    echo "<td>" . $row['SALARY'] . "</td>";
    echo "</tr>";
  }
}
echo "</table>";
*/

?>

</body>
</html>
