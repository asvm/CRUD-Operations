<?php
    include_once 'dbh.inc.php';
    /* We should never take post statement directly and insert inside the DB.
       So we need to escape characters using the mysqli_real_escape_string() function. */

    /* mysqli_real_escape_string() escapes all different characters from inside the
    html form code that the user passes on and passes on to DB as just a string data.
    By this we can protect our DB from harm. */

    $empno = mysqli_real_escape_string($conn, $_POST['EMPNO']);
    $firstname = mysqli_real_escape_string($conn, $_POST['FIRSTNAME']);
    $lastname = mysqli_real_escape_string($conn, $_POST['LASTNAME']);
    $workdept = mysqli_real_escape_string($conn, $_POST['WORKDEPT']);
    $phoneno = mysqli_real_escape_string($conn, $_POST['PHONENO']);
    $hiredate = mysqli_real_escape_string($conn, $_POST['HIREDATE']);
    $salary = mysqli_real_escape_string($conn, $_POST['SALARY']);

    $sql = "INSERT INTO EMPLOYEE (EMPNO, FIRSTNAME, LASTNAME, WORKDEPT, PHONENO, HIREDATE, SALARY)
    VALUES ('$empno', '$firstname', '$lastname', '$workdept', '$phoneno', '$hiredate', '$salary');";
    mysqli_query($conn, $sql); // running the query on the DB

    /* header() function in php which takes us to another File
       ../ comes out of includes directory and runns index.php file
       and prints a message on the url -> signup=success     */
    header("Location: ../index.php?signup=success");

    /* ? used to indicate we are going to add something extra to the URL, which is not going to
         affect the actual page inside the website.  */

?>
