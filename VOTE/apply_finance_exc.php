<?php 
include('db_connect.php');
 
$target_dir="uploads/";

$target_file=$target_dir . basename($_FILES["fileToUploadImage"]["name"]);

$uploadOk=1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(isset($_FILES["fileuploaded"])){
	if($_FILES["fileuploaded"]["size"]>50000){
		?>
			<script type="text/javascript">
			alert("Sorry file is too large.");
			window.location.href='apply_finance_fail.php?fail';
			</script>
			<?php
		$uploadOk=0;
	}
	}
	//Allow certain file formats
	if($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "gif" && $imageFileType != "png")
	{
		?>
			<script type="text/javascript">
			alert("Image format not supported");
			window.location.href='apply_finance_fail.php?fail';
			</script>
			<?php
			exit();
		$uploadOk=0;
	}
	//Check if $uploadOk is set to 0 by an error_get_last
	if($uploadOk == 0)
	{?>
			<script type="text/javascript">
			alert("Your file was not uploaded");
			window.location.href='apply_finance_fail.php?fail';
			</script>
			<?php
			exit();
	}
	//if everything is ok upload file
	else{
		if(move_uploaded_file($_FILES["fileToUploadImage"]["tmp_name"],$target_file)){
			$image_file=$_FILES["fileToUploadImage"]["tmp_name"];
			if(isset($_POST['reg_no']))
			{
				$reg_no = $_POST['reg_no'];
			}
			if(isset($_POST['fname']))
			{
				$fname = $_POST['fname'];
			}
			if(isset($_POST['sname']))
			{
				$sname = $_POST['sname'];
			}
			if(isset($_POST['year']))
			{
				$year = $_POST['year'];
			}
			if(isset($_POST['reason']))
			{
				$reason = $_POST['reason'];
			}
			
					/*$sql="INSERT INTO video(video) VALUES('$image_file')";*/
		$image_loc=$_FILES["fileToUploadImage"]["name"];
		
	if(empty($reg_no) || empty($fname) || empty($sname)|| empty($year)||empty($reason) || empty($image_file)||empty($image_loc)) 
	{
				echo "<script type=\"text/javascript\">  window.alert('Please fill in all the fields!')  </script>";
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/apply_finance_fail.php', '_self')  </script>";

	exit();

	}
	if($year>3)
	{
				echo "<script type=\"text/javascript\">  window.alert('Fourth years and higher classes are not allowed!')  </script>";
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
				exit();
	}
	//Verifying that the applicant has not applied twice
	$check1=mysql_query("SELECT * FROM apply_chairperson WHERE reg_no='$reg_no'");
	$check2=mysql_query("SELECT * FROM apply_finance WHERE reg_no='$reg_no'");
	$check3=mysql_query("SELECT * FROM apply_general_sec WHERE reg_no='$reg_no'");
	$check4=mysql_query("SELECT * FROM active_app WHERE reg_no='$reg_no'");
	$check5=mysql_query("SELECT * FROM declined_app WHERE reg_no='$reg_no'");

	if(mysql_fetch_array($check1)!=0 or mysql_fetch_array($check2)!=0 or mysql_fetch_array($check3)!=0 or mysql_fetch_array($check4)!=0 or mysql_fetch_array($check5)!=0 )
			{
				echo "<script type=\"text/javascript\">  window.alert('You Can Only Apply Once!')  </script>";
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
				exit();
			}

		//Verifying that the applicant exist in the the voters register.
		$check=mysql_query("SELECT * FROM vote_register WHERE reg_no='$reg_no'");
		if(mysql_fetch_array($check)==0)
		{
			echo "<script type=\"text/javascript\">  window.alert('Please Register As A Voter Before Applying!')  </script>";
			echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
			exit();
		}
		
$query = "INSERT INTO active_app(reg_no,fname,sname,year,post,reason,image,image_caption) 
VALUES ('$reg_no','$fname','$sname','$year','finance','$reason','$image_file','$image_loc')";

$mysql=mysql_query($query,$con);
if(!$mysql)
{
?>
			<script type="text/javascript">
			alert("Your application was not successful. Fill all fields with valid details (check your registration number).");
			window.location.href='apply_finance_fail.php?fail';
			</script>
			<?php
			exit();
}
			?>
			<script type="text/javascript">
			alert("Your have successfuly Applied. Check the list of successful applicants to see if you qualified after the veting exercise is over.");
			//window.location.href='member_index.php?Success';
			</script>
			<?php
			echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
		}
		else{
			?>
			<script type="text/javascript">
			alert("Sorry,there was an error uploading your file.");
			window.location.href='apply_finance_fail.php?fail';
			</script>
			<?php
		}
	
	}
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
?>