<?php

 include('db_connect.php');
 
	  $sql1="SELECT vote_status FROM students_login WHERE reg_no='$reg_no'";
       $result1=mysql_query($sql1,$con);

       $row=mysql_fetch_array($result1);

       $vote_status =$row['vote_status'];

       if($vote_status !=1){
        
        header("location:vote.php"); 
        
        }else{
            
        header("location:voted.php");
        }
?>