<?php
include('db_connect.php');

	if(isset($_POST['fname'])){
			$name1 = $_POST['fname'];
		}
		if(isset($_POST['phone_no'])){
			$phone_no = $_POST['phone_no'];
		}
		if(isset($_POST['sname'])){
			$name2 = $_POST['sname'];
		}
		
		$name=$name1.' '.$name2;
		
		if(isset($_POST['email'])){
			$email = $_POST['email'];
	   }
	   if(isset($_POST['message'])){
			$message = $_POST['message'];
	   }
	 
	 $sql_1 = "INSERT INTO contact(name,phone_no,email,message)  
	 VALUES('$name','$phone_no','$email','$message')";
     $result_1 = mysql_query($sql_1);
	 
if(!($result_1))
{
?>
	<script type="text/javascript">
	alert("Sending your message failed!. (Ensure that all the fields are filled properly)");
	</script>
<?php
	 echo mysql_error();
	 exit();
}
	  else
?>
			<script type="text/javascript">
			alert("Message sent successfully! we will get back to you soon");
			</script>
<?php
echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php','_parent')  </script>";
?>