<html>
<head>
    <title>Contact</title>
<link rel="stylesheet" href="../css/contactus.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT</a></li>
                <li><a href="contactus.php">CONTACT</a></li>
                <li><a href="../login.php">ADMIN LOGIN</a></li>
          </ul>
        </div>
      </nav>
      <div class="">
        <form method='post'style="margin:30px ">
          <table class="table">
            <br>
              <h2 class="search">How can we help you?</h2>
             
              <tr>
                <th class='tblheading'>Enter Your Name</th>
              </tr>
              <tr>
              <td><input type='text' class='' name='name' placeholder='Full Name' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Enter your Email Id</th>
              </tr>
              <tr>
                <td class=''><input type='text' class='' name='email' placeholder='Email Id' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Enter your Contact No.</th>
              </tr>
              <tr>
                <td class=''><input type='text' class='' name='cont' placeholder='Contact No' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Type your Message</th>
              </tr>
              <tr>
                <td ><input type="textarea" class='' name="message" placeholder='Type here...'></td>
              </tr>
              <tr>
              <td colspan='2' align='center'><input type="submit" name='submit' value='SEND' class='submit'/></td>
              </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $username=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['cont'];
    $message=$_POST['message'];
    $sql="INSERT INTO `user_massage`(`u_name`, `u_email`, `u_contact`, `u_massage`) VALUES ('$username','$email','$contact','$message')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
      <script>
      alert('Your Message is sent to Admin');

     </script>
   <?php
    }
}

?>