<?php 
    session_start();
    include('server.php');

    $countall = "SELECT row_id FROM scores4";
    $result = mysqli_query($conn, $countall);
        
    $rowcount = mysqli_num_rows($result);
    $_SESSION['countall'] = $rowcount;
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
    
    <title>Dashboard</title>
    
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
            
            $query = "  SELECT COUNT(row1)
                        FROM scores4
                        WHERE row1 = 1
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $choice1 = $row[0];
            
            $query = "  SELECT COUNT(row1)
                        FROM scores4
                        WHERE row1 = 2
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $choice2 = $row[0];

            $query = "  SELECT COUNT(row1)
                        FROM scores4
                        WHERE row1 = 3
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $choice3 = $row[0];

            $query = "  SELECT COUNT(row1)
                        FROM scores4
                        WHERE row1 = 4
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $choice4 = $row[0];     

            
        ?>

        <?php  // CHART 2 BAR ------------------------------------------------------------------------------------
           
            $query = "  SELECT COUNT(row2)
                        FROM scores4
                        WHERE row2 = 1
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $r2_c1 = $row[0];
            
            $query = "  SELECT COUNT(row2)
                        FROM scores4
                        WHERE row2 = 2
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $r2_c2 = $row[0];

            $query = "  SELECT COUNT(row3)
                        FROM scores4
                        WHERE row3 = 1
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $r3_c1 = $row[0];

            $query = "  SELECT COUNT(row3)
                        FROM scores4
                        WHERE row3 = 2
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $r3_c2 = $row[0];
            
            $query = "  SELECT COUNT(row4)
                        FROM scores4
                        WHERE row4 = 1
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $r4_c1 = $row[0];
            
            $query = "  SELECT COUNT(row4)
                        FROM scores4
                        WHERE row4 = 2
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $r4_c2 = $row[0];

            $query = "  SELECT COUNT(row5)
                        FROM scores4
                        WHERE row5 = 1
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $r5_c1 = $row[0];

            $query = "  SELECT COUNT(row5)
                        FROM scores4
                        WHERE row5 = 2
                    ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_row($result);
            $r5_c2 = $row[0];  
            
        ?>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 py-3">
                    <div class="card" style="font-family: 'Source Code Pro', monospace;">
                        <div class="card-body">
                            <h1 style="font-family: 'Chonburi', cursive;">ข้อที่ 1</h1>
                            <br />

                            <canvas id="myChart1"></canvas>
                            <br /> <br /> 
                            
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-sm-12 py-3">
                    <div class="card" style="font-family: 'Source Code Pro', monospace;">
                        <div class="card-body">
                            <h1 style="font-family: 'Chonburi', cursive;">ข้อที่ 2 3 4 และ 5</h1>
                            <br />

                            <canvas id="myChart2"></canvas>
                            <br /> <br /> 
                            
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
                        
                        data: [<?php echo $choice1;?> ,<?php echo $choice2;?> ,<?php echo $choice3;?> ,<?php echo $choice4;?>
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

                    labels: ['2-1' ,'2-2' ,'3-1' ,'3-2','4-1' ,'4-2' ,'5-1' ,'5-2'
                    ],
                    datasets: [{
                        
                        data: [<?php echo $r2_c1;?> ,<?php echo $r2_c2;?> ,<?php echo $r3_c1;?> ,<?php echo $r3_c2;?>,
                                <?php echo $r4_c1;?> ,<?php echo $r4_c2;?> ,<?php echo $r5_c1;?> ,<?php echo $r5_c2;?>
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