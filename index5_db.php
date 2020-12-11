<?php 
    session_start();
    include('server.php');
    
    //collect answer row5
    $checkbox = $_POST['pattern'];
    foreach ($checkbox as $key => $value) {
            $row5= $value;
    }
    $_SESSION['row5']= $row5; 

    /*---------------------------------- INSERT to database ----------------------------------*/

    $errors = array();
    if (isset($_POST['submit'])) {

        if (empty($checkbox)) {
            array_push($errors, "กรุณาเลือกข้อนึงนะค้าบ ;-;");
            $_SESSION['error'] = "กรุณาเลือกข้อนึงนะค้าบ ;-;";
            header("location: index.php");   
        }
        
        if (count($errors) == 0) {
                
                //ทำตารางเก็บข้อมูลใหม่เป็นแต่ละข้อ 5 ข้อไปเลยแง ;-;
                $row1 = $_SESSION['row1'];
                $row2 = $_SESSION['row2'];
                $row3 = $_SESSION['row3'];
                $row4 = $_SESSION['row4']; 
                $row5 = $_SESSION['row5']; 
    
                $insert = "INSERT INTO scores4 (row1,row2,row3,row4,row5)VALUES ('$row1','$row2','$row3','$row4','$row5')"; 
                mysqli_query($conn, $insert);


                // countall
                $countall = "SELECT * FROM scores4";
                $result = mysqli_query($conn, $countall);

                while($row = mysqli_fetch_array($result)){
                    $new_countall = $row['row_id'];
                }
                $_SESSION['countall'] = $new_countall;


                header('location: finish.php');
                
        }                  
    }
?>