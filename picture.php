
<?php

include("./compon/book_table.php");
session_start();

$user=$_SESSION['user'];

if(!isset($user)){
    header("location:login.php");
}

if(isset($_GET['logout'])){
    unset($user);
    session_destroy();
    header("location:./login.php");
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <style>
        .container{
            min-height:100vh;
            background-color: var(--light-bg);
            display:flex;
            align-items:center;
            justify-content:center;
            padding:20px;
        }
        .container .profile{
            background-color: var(--white);
            padding:20px;
            box-shadow: var(--box-shadow);
            text-align:center;
            width:400px;
            border-radius:5px;
        }
        .container .profile img{
            width:300px;
            height:300px;
            border-radius:50%;
            object-fit:cover;
            margin-bottom:5px;

        }
        a:link, a:visited {
         background-color: blue;
         color: white;
         padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
          }

         a:hover, a:active {
          background-color: green;}






    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <?php
        $sql=mysqli_query($conn,"SELECT * FROM `users_login` WHERE id='$user'")
        or die('query failed ');
        if(mysqli_num_rows($sql)>0){
            $fetch=mysqli_fetch_assoc($sql);

        }
       
        if($fetch['image'] == ''){
           
            header("refresh:3 url=./index.php");
            echo '<img src="./admin/upload/default-pp.png">';

        }else{
            
            header("refresh:3 url=./index.php");
            echo '<img src="upload1/'.$fetch['image'].'">';
           
        }
            ?>
            <h3 class="box"><?php echo $fetch['fullname']; ?></h3>
            
            <a href="login.php?logout=<?php echo $user?>" class="box" >Logout </a>





        </div>
     </div>


</body>
</html>