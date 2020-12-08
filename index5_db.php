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
            header("location: index5.php");   
        }
        
        if (count($errors) == 0) {

            if (isset($pattern)) {

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


                header('location: finish.php');
                
                
            }
                
        }  
        
    }


?>