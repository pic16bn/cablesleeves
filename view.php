<!DOCTYPE HTML>
<html>
<?php
	include('database.php');


	$query = dbConn()->prepare('SELECT * FROM order_table WHERE Customer_ID  = :cids ;');
	$query->bindParam(":cids", $_GET['cid']);
	$query->execute();

	$view = $query->fetch(PDO::FETCH_ASSOC);


	$CID = $view['Customer_ID'];
	$CName = $view['Customer_Name'];
	$CMail = $view['Customer_Email'];
	$CPhone = $view['Customer_PhoneNo'];
	$CL1 = $view['Length1'];
	$CL2 = $view['Length2'];
	$CL3 = $view['Length3'];
	$CMarks = $view['Remarks'];
	$CCol1 = $view['Color1'];
	$CCol2 = $view['Color2'];
	$CCol3 = $view['Color3'];
	$Status = $view['Status'];

?>
<head>
<title>PIC16 CABLE SLEEVE</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Custom, Wire, Cable" />
<script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
<script src="js/jquery-1.11.1.min.js"></script>

</head>



<body>
	<div class="header-section">
		
		<div class="container">
			<div class="footer-top">
				<p style="float: right;"><a href="admin.php"><b>ADMIN</b></a></p>
			</div>
		</div>
	</div>
		<div class="content">
			<div class="about">
				<div class="container">
					<div class="about-grids"><br/><br/>
						<div class="row">
							<div class="col-md-12" style="text-align: left;font-size: 16px;">

								<!--Content-->
							
									<button style="float: right; background-color: #E52C2C;" onclick="Deletes()">DELETE</button>
									<h2>CUSTOMER INFO</h2><br/><br/>

									
									<?php
										echo "ORDER ID: " . $CID . "<br/>";
										echo "NAME: " . $CName . "<br/>";
										echo "EMAIL: " . $CMail . "<br/>";
										echo "PHONE NO: " . $CPhone . "<br/><br/>";
										echo "CABLE LENGTH 1: " . $CL1 . "<br/>";
										echo "CABLE LENGTH 2: " . $CL2 . "<br/>";
										echo "CABLE LENGTH 3:: " . $CL3 . "<br/>";
										echo "REMARKS: " . $CMarks . "<br/><br/>";
										echo "COLOR 1: " . $CCol1 . "<br/><br/>";
										echo "COLOR 2: " . $CCol2 . "<br/><br/>";
										echo "COLOR 3: " . $CCol3 . "<br/><br/>";
										echo "STATUS: " . $Status . "<br/>";
									?>

									
									<br/><br/>

									<a href="admin.php"><button style="float: right;">BACK</button></a>
									<a href="process.php?cid=<?php echo $CID . "&stats=" . $Status ?> "><button style="float: right;">DONE</button></a>
									
						


					</div>
				</div>
			</div>
		</div>

</body>


<script type="text/javascript">
	function Deletes() {
  		var r = confirm("Are you sure?");

		  if (r == true) {
		    window.location.href = "delete.php?cid=<?php echo $CID; ?>";
		  } else {
		    return;
		  }
	}

</script>
<script src='js/jquery-3.5.1.min.js'></script>
<script src='js/bootstrap.min.js'></script>


</html>
