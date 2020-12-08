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
            header("location: index2.php");   
        }
        
        if (count($errors) == 0) {

            if (isset($pattern)) {

                if ($pattern == 1) {
                    $count = "SELECT * FROM scores2";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern1'] + 1;
                    }
                    $update = "UPDATE scores2 SET pattern1 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 2) {
                    $count = "SELECT * FROM scores2";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern2'] + 1;
                    }
                    $update = "UPDATE scores2 SET pattern2 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 3) {
                    $count = "SELECT * FROM scores2";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern3'] + 1;
                    }
                    $update = "UPDATE scores2 SET pattern3 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 4) {
                    $count = "SELECT * FROM scores2";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern4'] + 1;
                    }
                    $update = "UPDATE scores2 SET pattern4 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 5) {
                    $count = "SELECT * FROM scores2";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern5'] + 1;
                    }
                    $update = "UPDATE scores2 SET pattern5 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 6) {
                    $count = "SELECT * FROM scores2";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern6'] + 1;
                    }
                    $update = "UPDATE scores2 SET pattern6 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 7) {
                    $count = "SELECT * FROM scores2";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern7'] + 1;
                    }
                    $update = "UPDATE scores2 SET pattern7 = $new_count";
                    mysqli_query($conn, $update);
                }

                if ($pattern == 8) {
                    $count = "SELECT * FROM scores2";
                    $result = mysqli_query($conn, $count);

                    while($row = mysqli_fetch_array($result)){
                        $new_count = $row['pattern8'] + 1;
                    }
                    $update = "UPDATE scores2 SET pattern8 = $new_count";
                    mysqli_query($conn, $update);
                }


                header('location: index3.php');
                
                
            }
                
        }  
        
    }


?>