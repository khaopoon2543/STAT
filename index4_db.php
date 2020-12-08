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
            header("location: index4.php");   
        }
        
        if (count($errors) == 0) {

            if (isset($pattern)) {

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


                header('location: index5.php');
                
                
            }
                
        }  
        
    }


?>