<?php
    // ye samjha?
    $con = mysqli_connect('localhost','root','','prestige_bootstrap');

    if(mysqli_connect_errno()){
        echo("not connected");
    }

    if(!empty($_POST['username']) && !empty($_POST['useremail']) && !empty($_POST['usermobile']) && !empty($_POST['usercomments']))
    {
        $user = $_POST['username'];
    $email = $_POST['useremail'];
    $mobile = $_POST['usermobile'];
    $comments = $_POST['usercomments'];
        $query = "insert into user_info_data (user,email, mobile,comments) values ('$user','$email','$mobile','$comments')";

    if(mysqli_query($con,$query)){
        echo("1");
    }else{
        echo("2");
    }
    
    }
    if(!empty($_POST['site_user_name']) && !empty($_POST['site_user_email']) && !empty($_POST['site_user_mobile']) && !empty($_POST['site_user_visit']))
    {
        $user = $_POST['site_user_name'];
    $email = $_POST['site_user_email'];
    $mobile = $_POST['site_user_mobile'];
    $date = date('Y-m-d', strtotime($_POST['site_user_visit']));
    $query = "INSERT INTO `visit_user` (`visit_user_name`, `visit_user_email`, `visit_user_phone`, `visit_user_date`) VALUES ('$user', '$email', '$mobile', '$date')";
    if(mysqli_query($con,$query))
    {
        echo("1");
    }else{
        echo("2");
    }

    }
    
    
    
    

?>