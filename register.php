<?php
include("./compon/book_table.php");

$pic_uploaded=0;
if(isset($_POST['submit'])){
  $fullname=$_POST['fullname'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  
  $img=time().$_FILES["pp"]['name'];
  if(move_uploaded_file($_FILES["pp"]['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'./restaurant/upload1/'.$img)){

    $target_file=$_SERVER['DOCUMENT_ROOT'].'./restaurant/upload1/'.$img;
    $imagefiletype=strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $picname=basename($_FILES["pp"]['name']);
    $photo=time().$picname;

    if($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype != "png")
    {?>
       <script>
        alert('please upload photo having extension .jpg/ .jpeg/ .pag');
        </script>
    <?php
    }
    elseif($_FILES["pp"]['size'] > 20000000)
    {?>
       <script>
        alert('your photo exceed the size of 2 MB');
        </script>

     <?php }

     else{
        $pic_uploaded=1;
     }



    }
  if($pic_uploaded==1  ){
    $sql="SELECT * FROM users_login WHERE username='$username' OR email='$email'";
    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0){
        echo "<script> alert('Username or Email has already taken') </script>";
        
    }else{
        $query="INSERT INTO `users_login`(`fullname`, `username`, `email`, `password`, `image`)
         VALUES ('$fullname','$username','$email','$password','$photo')";
         $result=mysqli_query($conn,$query);

         if(!$result){
            echo "Error: ".mysqli_error($conn);

         }else{
          echo "<script> alert('Account created successfully') </script>";
          
	         
         }
   }
  
}
else{
  ?>
  <script>
    alert('image not uploaded');
    </script>
    <?php
  
  
  }}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users registration</title>
    

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
          Create Account
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
              <div>
                <input type="text" class="form-control" placeholder="Your Fullname"  required= "" name="fullname"/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Your Username" name="username" required= ""/>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" name="email" required= ""/>
              </div>
                <div>
              <input type="password" class="form-control" placeholder="Your Password" name="password" required= ""/>
              </div>
              
              <div>
					<input type="file" id="image" name="pp" value="" class="form-control" required >
             </div>
              
            
              <div class="btn_box">
                <button name="submit">
                  submit
                </button>
                <p>Already a member?</p>
                <a href="login.php" >Log in</a>
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

