<!DOCTYPE HTML>
<html>
<?php
	include('database.php');
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



<body onload="setInterval('window.location.reload()', 120000);">
	<div class="header-section">
		
		<div class="container">
			<div class="footer-top">
				<p style="float: right;"><a href="index.php"><b>INDEX</b></a></p>
			</div>
		</div>
	</div>
		<div class="content">
			<div class="about">
				<div class="container">
					<div class="about-grids"><br/><br/>
						<div class="row">
							<div class="col-md-12">

								<!--Content-->
							

									<h2>CUSTOMER ORDER</h2>
									<p>Click the Cable details for more info</p><br/>

									<table border="1" width="100%">
										<th>ID</th>
										<th>Customer Name</th>
										<th>Phone No</th>
										<th>Status</th>
										<th>Cable Details</th>


									<?php
									$query = dbConn()->prepare('SELECT * FROM order_table WHERE Status = "Pending" ORDER BY Customer_ID ASC; ');
				                    $query->execute();

				                    	while($view = $query->fetch(PDO::FETCH_ASSOC)){


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

				                        echo "<tr>";

				                        echo "<td>" . $CID . "</td>";
				                        echo "<td>" . $CName . "</td>";
				                        echo "<td>" . $CPhone . "</td>";

				                        if($Status == "Pending"){
				                        	echo "<td style='background-color:#E52C2C;'>" . $Status . "</td>";
				                        }else{
				                        	echo "<td style='background-color:#3CB371;'>" . $Status . "</td>";
				                        }
				                        
				                        echo "<td> <a href='view.php?cid=" . $CID . "'><u>ORDER DETAILS</u></a> </td>";

				                        }

									
									$query1 = dbConn()->prepare('SELECT * FROM order_table WHERE Status = "Complete" ORDER BY Customer_ID ASC; ');
				                    $query1->execute();

				                    	while($view1 = $query1->fetch(PDO::FETCH_ASSOC)){


				                        $CID_ = $view1['Customer_ID'];
				                        $CName_ = $view1['Customer_Name'];
				                        $CMail_ = $view1['Customer_Email'];
				                        $CPhone_ = $view1['Customer_PhoneNo'];
				                        $CL1_ = $view1['Length1'];
				                        $CL2_ = $view1['Length2'];
				                        $CL3_ = $view1['Length3'];
				                        $CMarks_ = $view1['Remarks'];
				                        $CCol1_ = $view1['Color1'];
				                        $CCol2_ = $view1['Color2'];
				                        $CCol3_ = $view1['Color3'];
				                        $Status_ = $view1['Status'];

				                        echo "<tr>";

				                        echo "<td>" . $CID_ . "</td>";
				                        echo "<td>" . $CName_ . "</td>";
				                        echo "<td>" . $CPhone_ . "</td>";

				                        if($Status_ == "Pending"){
				                        	echo "<td style='background-color:#E52C2C;'>" . $Status_ . "</td>";
				                        }else{
				                        	echo "<td style='background-color:#3CB371;'>" . $Status_ . "</td>";
				                        }
				                        
				                        echo "<td> <a href='view.php?cid=" . $CID_ . "'><u>ORDER DETAILS</u></a> </td>";

				                        }


									?>

									</table>
						


					</div>
				</div>
			</div>
		</div>

</body>

<script src='js/jquery-3.5.1.min.js'></script>
<script src='js/bootstrap.min.js'></script>


</html>
