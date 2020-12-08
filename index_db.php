<?php 
    session_start();
    include('server.php');

    $checkbox = $_POST['pattern'];
    foreach ($checkbox as $key => $value) {
            $pattern = $value;  
    }

    /*---------------------------------- INSERT to database ----------------------------------*/

    $errors = array();
    if (isset($_POST['submit'])) {

        if (empty($pattern)) {
            array_push($errors, "กรุณาเลือกข้อนึงนะค้าบ ;-;");
            $_SESSION['error'] = "กรุณาเลือกข้อนึงนะค้าบ ;-;";
            header("location: index.php");   
        }
        
        if (count($errors) == 0) {

            if (isset($pattern)) {

                if ($pattern == 1) {
                    $count = "SELECT * FROM scores";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern1'] + 1;
                    }
                    $update = "UPDATE scores SET pattern1 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 2) {
                    $count = "SELECT * FROM scores";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern2'] + 1;
                    }
                    $update = "UPDATE scores SET pattern2 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 3) {
                    $count = "SELECT * FROM scores";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern3'] + 1;
                    }
                    $update = "UPDATE scores SET pattern3 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 4) {
                    $count = "SELECT * FROM scores";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern4'] + 1;
                    }
                    $update = "UPDATE scores SET pattern4 = $new_count";
                    mysqli_query($conn, $update);
                }


                // countall
                $countall = "SELECT countall FROM scores";
                $result = mysqli_query($conn, $countall);

                while($row = mysqli_fetch_array($result)){
                    $new_countall = $row['countall'] + 1;
                }
                $update_countall = "UPDATE scores SET countall = $new_countall";
                mysqli_query($conn, $update_countall);

                //test problem
                $_SESSION['countall'] = $new_countall;

                header('location: index2.php');
                
                
            }
                
        }  
        
    }


?>