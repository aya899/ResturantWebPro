<?php
include("./compon/book_table.php");
session_start();
if(isset($_POST['submit'])){
  

  $uname=mysqli_real_escape_string($conn,$_POST['uname']);
  $pass=mysqli_real_escape_string($conn,$_POST['pass']);

  $sql=mysqli_query($conn,"SELECT * FROM `users_login` WHERE username='$uname' 
  AND password='$pass'") or die('query failed');
  

  if(mysqli_num_rows($sql)>0){
     $row=mysqli_fetch_assoc($sql);
     $_SESSION['user']=$row['id'];

     header("Location:picture.php");
    
    

  }else{
    echo "<script> alert('Incorrect username or password')
     </script>";


  }



}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users login</title>
    

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
   
  <style>
     .book_section{
            min-height:100vh;
            background-color: var(--light-bg);
            display:flex;
            align-items:center;
            justify-content:center;
            padding:20px;
        }
        .book_section .container{
            background-color: var(--white);
            padding:20px;
            box-shadow: var(--box-shadow);
            text-align:center;
            width:400px;
            border-radius:5px;
        }
        button:hover  {cursor: pointer;}
        
        
          a:hover {color:blue ;}
    </style>
</head>
<body>
<section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Login Form
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="<?php $_PHP_SELF ?>" method="post" >
             
              <div>
                <input type="text" class="form-control" placeholder="Your Username" name="uname"/>
              </div>
              
                <div>
              <input type="password" class="form-control" placeholder="Your Password" name="pass"/>
              </div>
              
              
            
              <div class="btn_box">
                <button name="submit">
                  submit
                </button>
                <p>New to site?</p>
                <a href="register.php" >Creat Account</a>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>






