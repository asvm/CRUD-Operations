<!DOCTYPE html>
<html>
<head>
  <title>Writing to a Database from Php Form</title>
</head>

<body>

<center>
<form action="upload.inc.php" method="POST">
  <h2> Provide Employee details:</h2>
    <input type="text" name="EMPNO" placeholder="Emp-Number">
    <br><br>
    <input type="text" name="FIRSTNAME" placeholder="First-name">
    <br><br>
    <input type="text" name="LASTNAME" placeholder="Last-name">
    <br><br>
    <input type="text" name="WORKDEPT" placeholder="Work-department">
    <br><br>
    <input type="text" name="PHONENO" placeholder="Phone-number">
    <br><br>
    <input type="text" name="HIREDATE" placeholder="Joining-Date(yy-mm-dd)">
    <br><br>
    <input type="text" name="SALARY" placeholder="Salary">
    <br><br>
    <button type="submit" name="submit">Sign up</button>
</form>
</center>

</body>

</html>
