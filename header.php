<?php 

 include "config.php";
 $page= basename($_SERVER['PHP_SELF']);

 switch($page){
    case "single.php":
        if(isset($_GET['id'])){
            $sql_title="select * from post where post_id={$_GET['id']}";
            $result_title=mysqli_query($conn,$sql_title) or die("Title query failed");
            $row_title=mysqli_fetch_assoc($result_title);
            $page_title=$row_title['title'];
        }else{
            $page_title="No post found";
        }
    break;
    case "author.php":
         if(isset($_GET['aid'])){
            $sql_title="select * from user where user_id={$_GET['aid']}";
            $result_title=mysqli_query($conn,$sql_title) or die("Title query failed");
            $row_title=mysqli_fetch_assoc($result_title);
            $page_title="News By ".$row_title['first_name']." ".$row_title['last_name'];
        }else{
            $page_title="No post found";
        }
    break;
    case "search.php":
         if(isset($_GET['search'])){
            $page_title=$_GET['search'];
        }else{
            $page_title="No search found";
        }
    break;
    case "category.php":
         if(isset($_GET['cid'])){
            $sql_title="select * from category where category_id={$_GET['cid']}";
            $result_title=mysqli_query($conn,$sql_title) or die("Title query failed");
            $row_title=mysqli_fetch_assoc($result_title);
            $page_title=$row_title['category_name']." News";
        }else{
            $page_title="No post found";
        }
    break;
    default :
        $page_title="News Project";
    break;

 }

 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title; ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<!-- HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class=" col-md-offset-4 col-md-4">
             <?php
            include "config.php";

             $sql="select * from settings";

            $result=mysqli_query($conn,$sql) or die("Query failed");

            if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_assoc($result)){
                if($row['logo']==""){

                    echo '  <a href="index.php"><h1>'.$row['websitename'].'</h1></a>';

                }else{
                    echo '<a href="index.php" id="logo"><img src="admin/images/'.$row['logo'].'"></a>';
                }

           
                }
                }
              ?>   
            </div>
            <!-- /LOGO -->
        </div>
    </div>
</div>
<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                 include "config.php";

                 if(isset($_GET['cid'])){
                    $cat_id=$_GET['cid'];

                 }
                 
                 $sql="select * from category where post>0";
                   $result=mysqli_query($conn,$sql) or die("Query failed :category");

                    if(mysqli_num_rows($result)>0){
                   $active="";
                 ?>
                <ul class='menu'>
                 <!-- $hostname='http://localhost/news_project'; -->
                    <li><a  href="<?php echo "http://localhost/news_project"; ?>">Home</a></li>
                    <?php 
                     while($row=mysqli_fetch_assoc($result)){
                        if(isset($_GET['cid'])){
                            if($row['category_id']==$cat_id){
                             $active="active";

                            }else{
                                 $active="";
                             } 

                        }
                       
                     echo "<li><a class='{$active}' href='category.php?cid={$row['category_id']}'>{$row['category_name']}</a></li>";

                   } ?>
                </ul>
               <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- /Menu Bar -->
