<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<html>
<head>
    <title>Admin Dashboard</title>
<link rel="stylesheet" href="../css/admindash.css" type="text/css">
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
                <li><a href="contactus.php">CONTACT US</a></li>
                <li class="logout"><a href="logout.php">LOGOUT</a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <div class="box">
              <h1 style="font-family: 'CoreCircus', sans-serif;">Admin Dashboard</h1>
        </div>
  
        <div class="box1">
              <h3><a href="addmark.php"> ADD STUDENT MARKS <span>&rarr;</span>  </a></h3>
        </div>
       <div class="box2">
              <h3><a href="updatemark.php"> UPDATE STUDENT MARKS <span>&rarr;</span> </a></h3>
       </div>
       <div class="box3">
              <h3><a href="deleteform.php"> DELETE STUDENT DATA <span>&rarr;</span> </a></h3>
       </div>
       <div class="box4">
              <h3><a href="allstudentdata.php"> SHOW ALL DATA <span>&rarr;</span> </a></h3>
       </div>
       <div class="box5">
              <h3><a href="usermassage.php"> STUDENT MESSAGES <span>&rarr;</span> </a></h3>
       </div>
          
      </div>
    </header>
    
</body>
</html>