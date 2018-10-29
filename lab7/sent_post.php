<?php 
    header("Content-type:text/javascript;charset=utf-8");
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','lab_connect_mysql');

    
    $con = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable t o  connect');

    $comment = $_POST['comment'];

    if(isset($_POST)){
        if($_POST['isAdd']=='true'){

            $sql = "INSERT INTO content (ID,comment) VALUES ('','".$comment."')";
            mysqli_query($con,$sql);
        }

    }
    mysqli_close($con);
    
    ?>