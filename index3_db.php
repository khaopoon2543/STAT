<?php 
    session_start();
    include('server.php');
    
    //collect answer row3
    $checkbox = $_POST['pattern'];
    foreach ($checkbox as $key => $value) {
            $row3= $value;
    }
    $_SESSION['row3']= $row3; 

    /*---------------------------------- INSERT to database ----------------------------------*/

    $errors = array();
    if (isset($_POST['submit'])) {

        if (empty($checkbox)) {
            array_push($errors, "กรุณาเลือกข้อนึงนะค้าบ ;-;");
            $_SESSION['error'] = "กรุณาเลือกข้อนึงนะค้าบ ;-;";
            header("location: index3.php");   
        }
        
        if (count($errors) == 0) {
            header('location: index4.php');           
            }         
    }
?>