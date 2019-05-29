<?php
	$con = mysqli_connect('localhost','root','');

	if(!$con){
		echo'<script type="text/javascript">
			window.alert("not connected to server")
			</script>';
	}

	if(!mysqli_select_db($con,'showflix')){
		echo'<script type="text/javascript"
		window.alert("database not selected")
		</script>';
	}

	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Subject=$_POST['subject'];
	$Message=$_POST['message'];

	if(($_POST['name']=='')||($_POST['email']=='')||($_POST['subject']=='')||($_POST['message']=='')){
		echo'<script type="text/javascript">
		window.alert("Please fill in all the details.")
		</script>';
	}
	
	if(($_POST['subject']!='')&&($_POST['message']!='')&&($_POST['email']!='')&&($_POST['name']!='')){
				$sql="INSERT INTO contact(Name,Email,Subject,Message) VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";
				if(!mysqli_query($con,$sql)){
					echo'<script type="text/javascript">
					window.alert("not inserted")
					</script>';
				}else{
					echo'<script type="text/javascript">
					window.alert("inserted")
					</script>';
				}
			header("refresh:1; url=index.html");
		}else{
		header("refresh:1; url=contactus.html");
	}
?>