<?php
include 'conn.php';
$id= $_REQUEST['id'];
$upd= mysqli_query($con,"UPDATE q_and_a SET ques_approved=1 WHERE id=$id");
if($upd==1){
    mysqli_close($con);
    header("location:ques_ans.php");
    exit;
}
else{
    echo"Error in approval";
}
?> 
  