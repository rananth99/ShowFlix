<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"showflix");
if(isset($_REQUEST["login_submit"])){
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $query=mysqli_query($con,"select * from users where Name='$username' && Password1='$password'");
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true){
        header("refresh:1; url=index.html");
        echo'<script type="text/javascript">
                    window.alert("LOGIN SUCCESSFUL")
                    </script>';
    }else{
        header("refresh:1; url=login.html");
        echo'<script type="text/javascript">
                    window.alert("LOGIN FAILED")
                    </script>';
    }
}
?>