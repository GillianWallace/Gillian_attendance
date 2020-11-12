<?php 
//This include session file. this ffile contain code that starts/returns a session
//By having it in the header file. it will be included on every page, allowing sesssion capability to be used on every page a cross the website
include_once 'includes/session.php'?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="css/site.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Attendance - <?php echo $title ?></title>
  </head>
  <body>
     <div class="container">
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">IT Conference</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="viewrecords.php">View Attendees</a>
      
                    <?php 
                            if(!isset($_SESSION['userid'])){
                        ?>                      
                            <li class="nav-item">
                                <a class="nav-link  ml-auto" href="login.php">Login</a>
                            </li>  
                        <?php }else {?>  
                           
                            <li>
                            <spam">Hello <?php echo $_SESSION['username'] ?>!</spam>
                                <a class="nav-link" href="logout.php" >Logout</a>
                            </li>
                        <?php }?>                    
                    </ul>
                  
    </div>
  </div>
</nav>
<br/>
   