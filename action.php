<?php

$conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
if(isset($_POST['query'])){
	$inpText=$_POST['query'];
	$str="Select subject from auto_commp where subject like '%$inpText%'";
	$res=mysqli_query($conn,$str);
	if(mysqli_num_rows($res)>0){
		$sub=array();
    	while($sub=mysqli_fetch_assoc($res)){
    		echo "<a href='#s-wrapper' class='list-group-item list-group-item-action border-1'>".$sub['subject']."</a>";


	}
}

else
	echo "<p class='list-group-item border-1'>No Record</p>";
}
?>