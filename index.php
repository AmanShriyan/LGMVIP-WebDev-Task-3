<html>
<head>
    <title>Student Result Management System</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">HOME</a></li>
                <li><a href="admin/aboutus.php">ABOUT</a></li>
                <li><a href="admin/contactus.php">CONTACT US</a></li>
                <li><a href="login.php">ADMIN LOGIN</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <br>
              <h1 class="search" style="background-color:red"> KNOW YOUR RESULTS HERE!</h1>
              <br><br>
            <tr>
                <th class="std">Rollno</th>
                <td style="height: 3rem;"><input type="text" name="rollno" placeholder="RollNo" required class="box1"/></td>
                
            </tr>
            <tr>
                <th class="std">Standard</th>
                <td style="height: 5rem;"><input type="text" name="std" placeholder="Standard" required class="box2"/></td>
            </tr> 
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT" class="submit"/></td>
            </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>
