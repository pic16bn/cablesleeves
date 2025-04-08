<?php

	include('database.php');


	if(isset($_POST['submit1'])){

	$ff1 = $_POST['ff1'];
	$ff2 = $_POST['ff2'];
	$ff3 = $_POST['ff3'];
	$ff4 = $_POST['ff4'];
	$ff5 = $_POST['ff5'];
	$ff6 = $_POST['ff6'];
	$ff7 = $_POST['ff7'];

	$_24pinColor = $_POST['24pincolor'];
	$cpuColor = $_POST['cpucolor'];
	$gpuColor= $_POST['gpucolor'];

	$query = dbConn()->prepare('INSERT INTO order_table VALUES (NULL, :cname, :cmail, :cphone, :cl1, :cl2 , :cl3, :cmarks , :ccol1, :ccol2, :ccol3, "Pending");');

            $query->bindParam(":cname", $ff1);
            $query->bindParam(":cmail", $ff2);
            $query->bindParam(":cphone", $ff3);

            $query->bindParam(":cl1", $ff4);
            $query->bindParam(":cl2", $ff5);
            $query->bindParam(":cl3", $ff6);
            $query->bindParam(":cmarks", $ff7);


            $query->bindParam(":ccol1", $_24pinColor);
            $query->bindParam(":ccol2", $cpuColor);
            $query->bindParam(":ccol3", $gpuColor);

            $query->execute();


	//echo "Customer Contact Info: <br/><br/> Name: " .$ff1 . "<br/>";
	//echo "Email: " .$ff2 . "<br/>";
	//echo "Phone Number: " .$ff3 . "<br/>";
	//echo "Cable Length: <br/><br/> 24Pin: " .$ff4 . "<br/>";
	//echo "CPU: " .$ff5 . "<br/>";
	//echo "GPU: " .$ff6 . "<br/>";
	//echo "Remarks: " . $ff7 . "<br/><br/>Cable Color and Name: (Please Check remarks for any request) <br/><br/>";
	//echo $_24pinColor . "<br/><br/>";
	//echo $cpuColor . "<br/><br/>";
	//echo $gpuColor . "<br/><br/>";


	echo '<script type="text/javascript">'; 
	echo 'alert("Purchase Success!");'; 
	echo 'window.location.href = "index.php";';
	echo '</script>';


	//header("location:index.php");

	}else{
		
		$CID = $_GET['cid'];
		$STATS = $_GET['stats'];

		if($STATS == "Pending"){
			$query2 = dbConn()->prepare('UPDATE order_table SET Status = "Complete" WHERE Customer_ID = :cid ;');
			$query2->bindParam(":cid", $CID );
		}else{
			$query2 = dbConn()->prepare('UPDATE order_table SET Status = "Pending" WHERE Customer_ID = :cid ;');
			$query2->bindParam(":cid", $CID );
		}
		
		
		$query2->execute();

		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "admin.php";';
		echo '</script>';
	}

?>