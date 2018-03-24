<?php
    include_once 'includes/dbh.inc.php';

    $sql = "DELETE FROM EMPLOYEE WHERE EMPNO='011'";
    // running the query on the DB

    if(mysqli_query($conn, $sql)) {
      echo "<br>One row deleted from the Table";
    }
    else {
      echo "Error in deleting record" . mysqli_error($conn);
    }
?>
