<?php 
    session_start();
    include('server.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Prompt&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <title>Finish</title>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #0B0C10; font-family: 'Source Code Pro', monospace; color:#F5F5EF;">
        <a class="navbar-brand" href="#" style="font-family: 'Chonburi', cursive;"><i class="fas fa-newspaper"></i> STAT FOR HUMAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link text-light" href="index.php">Questionnaire<span class="sr-only">(current)</span></a>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link text-light" href="dashboard.php">Dashboard</a>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link text-light" href="ourteam.php">Ourteam</a>
            </form>
            <form class="form-inline mx-3 my-3 my-lg-0"> 
                <span class="badge badge-pill badge-light mr-sm-2" style="padding-right:10px; font-size: 0.9em;">
                    <i class="fas fa-user-circle"></i> 
                    <?php echo $_SESSION['countall'];?>
                </span>
            </form>
        </div>
    </nav>
  </head>

  <body>
        
        <div class="jumbotron jumbotron-fluid">  <!-- text-white bg-dark -->
            <div class="container">
                <center>
                    <h1 class="display-4">THANKYOU <i class="far fa-laugh-squint"></i></h1>
                    <p class="lead">
                        ขอขอบคุณที่กรุณาตอบแบบสอบถามค่ะ
                    </p>
                    <div class="cardnum" style="padding: 10px 20px 10px 20px; background: #f05454;">   
                        <h1><i class="fas fa-heart"></i></h1> 
                    </div> 
                </center>  
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 py-5">
                    <center>
                        <a href="index.php" type="button" class="btn btn-outline-dark" role="button" aria-pressed="true">BACK</a>
                    </center>
                </div>
            </div>
        </div>

        
        

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>