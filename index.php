
<!DOCTYPE html>
<html>
<head>
  <title>Name</title>
</head>
<body>
  <form method="get" action="show.php">
    <fieldset>
      <legend>NAME</legend>
      <table>
        <tr>
          <td>
            <input type="text" name="fname">
            <hr>
          </td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>
</html>
<?php
  
  if(isset($_POST['Submit']))
  {
    $email = $_POST['myEmail'];
    echo "$email";
  }
?>


<html>
<head>
  <title>Email</title>
</head>
<body>
  <form method="POST" action="">
    <fieldset>
      <legend>Email</legend>
      <table>
        <tr>
          <td>
            <input type="email" name="myEmail">
          </td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>
</html>
<?php
  
  if(isset($_POST['Submit']))
  {
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    echo "$date \r\n";
    echo "$month \r\n";
    echo "$year \r\n";
  }
?>


<html>
<head>
  <title>DOB</title>
</head>
<body>
  <form method="POST" action="">
    <fieldset>
      <legend>DOB</legend>
        <pre> <b> dd            mm            yyyy </b> </pre>
        <input type="number" name="date" size="5"> /
        <input type="number" name="month" size="5"> /
        <input type="number" name="year" size="5"> <br> <br>
    </fieldset>
  </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Gender</title>
</head>
<body>
  <form method="POST" action show.php">
    <fieldset>
      <legend>Gender</legend>
      <input type="radio" name="gender"/ value="Male"> Male
      <input type="radio" name="gender"/ value="Female"> Female
      <input type="radio" name="gender"/ value="Other"> Other
    </fieldset>
  </form>
</body>
</html>
<?php
  
  if(isset($_POST['Submit']))
  {
    echo "Degree: ";
    $degree = $_POST['degree'];
    echo "$degree \r\n";
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Degree</title>
</head>
<body>
  <form method="POST" action="">
    <fieldset>
      <legend>Degree</legend>
      <input type="checkbox" name="degree" value="SSC"> SSC
      <input type="checkbox" name="degree" value="HSC"> HSC
      <input type="checkbox" name="degree" value="BSc"> BSc
      <input type="checkbox" name="degree" value="MSc"> MSc
    </fieldset>
  </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Blood Group</title>
</head>
<body>
  <form method="get" action="show.php">
    <fieldset>
      <legend>BLOOD GROUP</legend>
      <table>
        <tr>
          <td>
            <input type="text" name="Blood Group">
            <hr>
          </td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>
</html>
