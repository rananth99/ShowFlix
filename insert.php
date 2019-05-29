<?php
	$con = mysqli_connect('localhost','root','');

	if(!$con){
		echo'<script type="text/javascript">
			window.alert("not connected to server")
			</script>';
	}

	if(!mysqli_select_db($con,'SHOWFLIX')){
		echo'<script type="text/javascript"
		window.alert("database not selected")
		</script>';
	}

	$Name=$_POST['username'];
	$Email=$_POST['email'];
	$Password1=$_POST['password1'];
	$Password2=$_POST['password2'];

	if(($_POST['username']=='')||($_POST['email']=='')||($_POST['password1']=='')||($_POST['password2']=='')){
		echo'<script type="text/javascript">
		window.alert("Please fill in all the details.")
		</script>';
	}
	
	if(($_POST['password1']!='')&&($_POST['password2']!='')&&($_POST['email']!='')&&($_POST['username']!='')){
		if($_POST['password1']==$_POST['password2']){
				header("refresh:1; url=index.html");
				$sql="INSERT INTO users(Name,Email,Password1,Password2) VALUES ('$_POST[username]','$_POST[email]','$_POST[password1]','$_POST[password2]')";
				if(!mysqli_query($con,$sql)){
					echo'<script type="text/javascript">
					window.alert("not inserted")
					</script>';
				}else{
					echo'<script type="text/javascript">
					window.alert("inserted")
					</script>';
				}
			}else{
		header("refresh:1; url=login.html");
		echo'<script type="text/javascript">
		window.alert("passwords dont match , not inserted")
		</script>';
		}
	}else{
		header("refresh:1; url=login.html");
	}
?>