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
                <a class="nav-link text-light" href="index.php">Questionnaire</a>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link text-light" href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
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
                    <h1 class="display-4">DASHBOARD <i class="fas fa-chart-pie"></i></h1>
                    <p class="lead">
                        เราได้รวมข้อมูลทุกอย่างไว้แล้ว!!!
                    </p> 
                </center>  
            </div>
        </div>
        
        <?php  // CHART 1 DOUGHTNUT ------------------------------------------------------------------------------------
            $query = "  SELECT *
                        FROM scores
                    ";
            $result = mysqli_query($conn, $query); 

            //for chart
            $pattern1 = array();
            $pattern2 = array();
            $pattern3 = array();
            $pattern4 = array();
 
            while($rs = mysqli_fetch_array($result)){ 
                $pattern1[] = "\"".$rs['pattern1']."\""; 
                $pattern2[] = "\"".$rs['pattern2']."\"";
                $pattern3[] = "\"".$rs['pattern3']."\""; 
                $pattern4[] = "\"".$rs['pattern4']."\"";  
            }
            
            $pattern1 = implode(",", $pattern1); 
            $pattern2 = implode(",", $pattern2); 
            $pattern3 = implode(",", $pattern3); 
            $pattern4 = implode(",", $pattern4); 

            //for table
            $table = "SELECT * FROM scores";
            $result = mysqli_query($conn, $table);
            while($row = mysqli_fetch_array($result)){
                $pattern11 = $row['pattern1'];
                $pattern22 = $row['pattern2'];
                $pattern33 = $row['pattern3'];
                $pattern44 = $row['pattern4'];
            }
        ?>

        <?php  // CHART 2 BAR ------------------------------------------------------------------------------------
            $query = "  SELECT *
                        FROM scores2
                    ";
            $result = mysqli_query($conn, $query); 

            //for chart
            $p1 = array();
            $p2 = array();
            $p3 = array();
            $p4 = array();
            $p5 = array();
            $p6 = array();
            $p7 = array();
            $p8 = array();
 
            while($rs = mysqli_fetch_array($result)){ 
                $p1[] = "\"".$rs['pattern1']."\""; 
                $p2[] = "\"".$rs['pattern2']."\"";
                $p3[] = "\"".$rs['pattern3']."\""; 
                $p4[] = "\"".$rs['pattern4']."\""; 
                $p5[] = "\"".$rs['pattern5']."\""; 
                $p6[] = "\"".$rs['pattern6']."\"";
                $p7[] = "\"".$rs['pattern7']."\""; 
                $p8[] = "\"".$rs['pattern8']."\"";   
            }
            
            $p1 = implode(",", $p1); 
            $p2 = implode(",", $p2); 
            $p3 = implode(",", $p3); 
            $p4 = implode(",", $p4);
            $p5 = implode(",", $p5); 
            $p6 = implode(",", $p6); 
            $p7 = implode(",", $p7); 
            $p8 = implode(",", $p8);  

            //for table
            $table = "SELECT * FROM scores2";
            $result = mysqli_query($conn, $table);
            while($row = mysqli_fetch_array($result)){
                $p1 = $row['pattern1'];
                $p2 = $row['pattern2'];
                $p3 = $row['pattern3'];
                $p4 = $row['pattern4'];
                $p5 = $row['pattern5'];
                $p6 = $row['pattern6'];
                $p7 = $row['pattern7'];
                $p8 = $row['pattern8'];
            }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

        <div class="container">
            <div class="row">
                <div class="col-12 py-3">
                    <div class="card" style="font-family: 'Source Code Pro', monospace;">
                        <div class="card-body">
                            
                            <canvas id="myChart1"></canvas>
                            <br /> <br /> 
                            <table class="table table-striped">
                                <thead>  
                                    <tr>                                         
                                        <th>Pattern1</th>  
                                        <th>Pattern2</th>  
                                        <th>Pattern3</th>  
                                        <th>Pattern4</th>
                                        <th>ALL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $pattern11; ?></td>
                                        <td><?php echo $pattern22; ?></td>
                                        <td><?php echo $pattern33; ?></td>
                                        <td><?php echo $pattern44; ?></td>
                                        <td><?php echo $_SESSION['countall']; ?></td>
                                    </tr>
                                </tbody>   
                            </table>
                            
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 py-3">
                    <div class="card" style="font-family: 'Source Code Pro', monospace;">
                        <div class="card-body">
                            
                            <canvas id="myChart2"></canvas>
                            <br /> <br /> 
                            <table class="table table-striped">
                                <thead>  
                                    <tr>                                         
                                        <th>1(1)</th>  
                                        <th>1(2)</th>  
                                        <th>2(1)</th>  
                                        <th>2(2)</th>
                                        <th>3(1)</th>  
                                        <th>3(2)</th>  
                                        <th>4(1)</th>  
                                        <th>4(2)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $p1; ?></td>
                                        <td><?php echo $p2; ?></td>
                                        <td><?php echo $p3; ?></td>
                                        <td><?php echo $p4; ?></td>
                                        <td><?php echo $p5; ?></td>
                                        <td><?php echo $p6; ?></td>
                                        <td><?php echo $p7; ?></td>
                                        <td><?php echo $p8; ?></td>
                                    </tr>
                                </tbody>   
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var ctx1 = document.getElementById("myChart1").getContext('2d');
            var myChart1 = new Chart(ctx1, {
                type: 'doughnut',
                data: {

                    labels: ['Pattern 1' ,'Pattern 2' ,'Pattern 3' ,'Pattern 4'
                    ],
                    datasets: [{
                        
                        data: [<?php echo $pattern1;?> ,<?php echo $pattern2;?> ,<?php echo $pattern3;?> ,<?php echo $pattern4;?>
                            ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        hoverBackgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                       
                    }]
                },
                
                options: {  legend: {
                                        position: 'right',
                                        labels: {   
                                                    fontSize: 15 ,
                                                    fontFamily: 'Source Code Pro'	
                                                },
                                    }
                        }
                
            });
        </script>

        <script>
            var ctx1 = document.getElementById("myChart2").getContext('2d');
            var myChart2 = new Chart(ctx1, {
                type: 'bar',
                data: {

                    labels: ['1(1)' ,'1(2)' ,'2(1)' ,'2(2)','3(1)' ,'3(2)' ,'4(1)' ,'4(2)'
                    ],
                    datasets: [{
                        
                        data: [<?php echo $p1;?> ,<?php echo $p2;?> ,<?php echo $p3;?> ,<?php echo $p4;?>,
                                <?php echo $p5;?> ,<?php echo $p6;?> ,<?php echo $p7;?> ,<?php echo $p8;?>
                            ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        hoverBackgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                       
                    }]
                },
                
                options: {  legend: {
                                        position: 'none',
                                        labels: {   
                                                    fontSize: 15 ,
                                                    fontFamily: 'Source Code Pro'	
                                                },
                                    }
                        }
                
            });
        </script>

        <br /> <br /> 

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>