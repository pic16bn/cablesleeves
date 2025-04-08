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
<body>
	<div class="header-section">
		
		<div class="container">
			<div class="footer-top">
				<p style="float: right;"><b>Customer service/Custom order: +6738958830</b></p>
			</div>
		</div>
	</div>
		<!--header-->		
		<div class="header" id="home">
			<div class="container">	
			<div class="header-top">

				<div class="logo">
					<h1><a href="index.html"><strong>PIC16 CABLE SLEEVE</strong></a></h1>
					<!--<a href="#"><img src="images/logo4.png" width="20%" style="float: left;"></a>-->
				</div>
				<div class="top-nav">
					
				
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//header-->

				<br/>
				<div class="banner-text">
					
					
					<img src="images/logo1.png" width="30%" style="min-width: 200px;" class="logos" alt="PIC16">
					<br/><br/>
					<h3 style="font-size: 1.5em;"><b>YOU CAN GET YOURS AT</b> <!--<b>TECH.HAVEN</b> or <b>VERMTECH</b>--></h3>
					
					<hr style="border: 2px solid; width: 26%;" />
					<img src="images/logo3.png" width="20%" class="logos" style="margin-right: 3%;min-width: 120px;">
					<img src="images/logo2.png" width="20%" class="logos" style="min-width: 120px;">

					<br/>
					<br/>
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
								<div class="row" >
									<div class="col-md-12">

									<h2>CABLE SELECTIONS</h2>
									<p>Choose your cable, you can select more than one</p><br/>

									<input type="checkbox" name="24pin" value="" id="24pin" onclick="pickcable()"> <label for="24pin" style="font-size: 15px;"><b>24 PIN CABLE + CPU CABLE</b></label><span style="padding-left: 25px;"></span>
									
									<input type="checkbox" name="cpucable" value=""id="cpu" onclick="pickcable()" hidden><br/>
									
									<input type="checkbox" name="gpucable" value="" id="gpu" onclick="pickcable()"> <label for="gpu" style="font-size: 15px;"><b>GPU CABLE</b></label>
									</div>
								</div>
							</div>
						</div>

						<div class="row" id="gpuselection1" style="display:none;">
							<div class="col-md-12">

								<!--Choose Cable-->
								<br/><br/>	
								<h2>GPU CABLE SELECTION: </h2><br/>

								<!--
								<select name="type" id="type">
									<option value="item0">--Select Cable--</option>
								    <option value="item1">item1</option>
								    <option value="item2">item2</option>
								    <option value="item3">item3</option>
								</select><br/>-->
									<select id="mySelect" onchange="headeropt()" class="selectcable" style="width: 200px;">
									  <option value="6 Pin GPU"> 6 Pin GPU </option>
									  <option value="8 Pin GPU"> 8 Pin GPU </option>
									  <option value="12 Pin GPU"> 12 Pin GPU </option>
									  <option value="14 Pin GPU"> 14 Pin GPU </option>
									  <option value="16 Pin GPU"> 16 Pin GPU </option>
									  <option value="24 Pin GPU" selected> 24 Pin GPU </option>
									  <!--<option value="" selected hidden>-SELECT GPU CABLE-</option>-->
									</select><br/>

									<div id="selectcable" style="text-align: center;"></div>
								
							</div>
						</div><br/>

						<div id="showcolor1" style="display: none;">
						<div class="row">
							<div class="col-md-12">	


								<br/>
								<h2>CHOOSE COLOR: </h2>
								<p>Then click the wires you want to colorize</p><br/><br/>
								<?php include('color.php');?>

								<br/><br/><div id="stitle" style="float: left;display: none;"><h2>24 Pin CABLE</h2></div>

							</div>
						</div><br/>
						</div>
							<div class="row">

								<div class="col-md-12">

									<!--24PIN CABLE (ROW1-C1)-->
									
									<div id="24pinshow" style="position:relative;display:none">

										<ul>
											<li onclick="changeColor(this)" id="a0" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a1" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a2" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a3" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a4" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a5" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a6" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a7" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a8" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a9" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a10" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="a11" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
										</ul>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">

									<!--CPU CABLE (ROW1-C2)-->

									<div id="showcolor2" style="position:relative;display:none;top:430px;">
										<div class="row">
											<div class="col-md-12">

													<?php include('color.php');?>	
											</div>
										</div>
									</div>

									<div id="cpupinshow2" style="position:relative;display:none;top: 460px;">
										<ul>
											<li onclick="changeColor(this)" id="b0" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="b1" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="b2" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="b3" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>	
										</ul>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">

									<!--GPU CABLE (ROW1-C3)-->

								<div id="showcolor3" style="position:relative;display: none;top:880px;" >
	
									<div class="row">
										<div class="col-md-12">

												<?php include('color.php');?>
												<br/><br/><div id="gputitle" style="float: left;"><h2>24 Pin GPU</h2></div>
										</div>
									</div>
								</div>

									<div id="gpupinshow2" style="position:relative;display: none;top:900px;" >

										<ul>
											<li onclick="changeColor(this)" id="c0" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c1" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c2" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c3" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c4" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c5" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c6" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c7" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c8" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c9" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c10" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
											<li onclick="changeColor(this)" id="c11" class="color-black" data-color="black"><img src="images/cheader/1pin.png" class="cheader"></li>
										</ul>
									</div>
								</div>
							</div><!--row-->

							
								<div class="space" id="space" style="height: 0px;z-index: -1;"></div>
								

								<!--380 880 1350-->
						
					</div>
				</div>
			</div>
		</div>
		
			<div class="contact-us">
				<div class="container">
					
					<div class="contact-info">
						<form class="formgroup" >
							<div class="row">
								
							<!-- save data to modal-->

								<div class="col-md-4">
								</div>
								<div class="col-md-4">
									<input type="text" placeholder="Name" id="f1" style="width: 100%;">
									<input type="text" placeholder="Email" id="f2" style="width: 100%;">
									<input type="text" placeholder="Phone Number" id="f3" style="width: 100%;">

									<br/>
									<br/>
									<!--<input type="text" placeholder="Cable Length" id="f4" >-->

											<p style="float: left;"> 24 Pin CABLE:  <input type="text" placeholder="30cm (Default)" id="f4" style="width: 120px;margin-left: 9px;"></p>
											<p style="float: left;"> CPU CABLE: <input type="text" placeholder="18cm (Default)" id="f5" style="width: 120px;margin-left: 17px;"></p>
											<p style="float: left;"> GPU CABLE: <input type="text" placeholder="40cm (Default)" id="f6" style="width: 120px;margin-left: 17px;"></p>
										
											
										

									<!--<input type="text" id="f7" placeholder="Remarks: Example. I don't need CPU cable." style="width: 100%;">-->
									<textarea id="f7" placeholder="Remarks: Example. I don't need CPU cable."></textarea>
									

								<br/>

								<a type="submit" value="PURCHASE" name="buy" data-toggle="modal" href="#myModal" class="btn btn-primary" onclick="paste()" >PURCHASE</a><br/><br/>

								</div>

							<!-- Button to trigger modal -->
							

						</form>

						<br/>
						<br/>
						<br/>
					</div>
				</div>
			</div>

			

			<div class="container">

				
				 
				  <!-- Modal -->
				  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				      <div class="modal-content contact-info">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				          <h4 class="modal-title" style="float: left;position: absolute;">Confirm Order Details</h4>
				        </div>


				        <div class="modal-body">
				        	<div class="row">
				        		<div class="col-md-12">
				        	<form class="formgroup" method="POST" action="process.php" name="forms">
				        		<h4 class="modal-title" style="float: left;">Contact Info</h4>
				         		<input type="text" id="ff1" name="ff1" value="test" placeholder="Name" style="width: 100% !important;margin-bottom: 1em;" required>
				         		<input type="text" id="ff2" name="ff2" placeholder="Email" style="width: 100% !important;margin-bottom: 1em;"  required>
				         		<input type="text" id="ff3" name="ff3" placeholder="Phone Number" style="width: 100% !important;margin-bottom: 1em;" required>
				         		<br/>
				         		<h4 class="modal-title" style="float: left;">Cable Details</h4><br/><br/>
				         		<p style="float: left;"> 24 Pin CABLE:  <input type="text" placeholder="30cm (Default)" id="ff4" name="ff4" style="width: 120px;margin-left: 9px;"></p><br/>
								<p style="float: left;"> CPU CABLE: <input type="text" placeholder="18cm (Default)" id="ff5" name="ff5" style="width: 120px;margin-left: 17px;"></p><br/>
								<p style="float: left;"> GPU CABLE: <input type="text" placeholder="40cm (Default)" id="ff6" name="ff6" style="width: 120px;margin-left: 17px;"></p><br/><br/>

								<textarea id="ff7" name="ff7"></textarea>

								<input type="text" name="24pincolor" id="24pincolor" hidden>
								<input type="text" name="cpucolor" id="cpucolor" hidden>
								<input type="text" name="gpucolor" id="gpucolor" hidden>

				         		<br/><br/><input type="submit" name="submit1" class="btn btn-primary" onclick="confirmall()">

				         	</form>
				         </div>
				     </div>
				         	
				        </div>


				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#CD5C5C;color:white;">Cancel</button>

				          
				        </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div><!-- /.modal -->
				  
				  
				</div>

			<!--Footer-->
			<div class="footer-section">
				<div class="container">
					<div class="footer-top">
						<p>Copyright &copy; 2020 <a href="https://www.instagram.com/pic16.bn/" target="_blank"><b>PIC16</b></a>. All rights reserved | Design by <a href="https://www.instagram.com/zulfikri_hk/" target="_blank"><strong>ZULFIKRI HK</strong></a></p>
					</div>
				</div>
			</div>
			<!--Footer-->
</body>



<script type="text/javascript">


/*$(document).ready(function () {
    $("#type").change(function () {
        var val = $(this).val();
        if (val == "item1") {
            $("#selectcable").html("<img src='images/item1.jpg' width='50%'> ");
        } else if (val == "item2") {
            $("#selectcable").html("<img src='images/item2.jpg' width='50%'> ");
        } else if (val == "item3") {
            $("#selectcable").html("<img src='images/item3.jpg' width='50%'> ");
        } else if (val == "item0") {
            $("#selectcable").html("<option value=''>--Please select cable--</option>");
        }
    });
});*/

//Select Color
/*$(document).ready(function() {
  $('#color').click(function() {
      var index = $(this).index();
      console.log(index);
  });
});*/

/* color pin*/
function choosecolor(newcolor) {
 	$("#selectedcolor").html("<input type='hidden' id='newcolor' value='" + newcolor + "' > ");
  	console.log(newcolor);
  	
}

/*Selected color pin*/
function changeColor(colors) {
  var colortype = colors.getAttribute("data-color");

	  $('ul li').click(function() {
	      //var index = $(this).index();
	      //console.log();
	      	var selectedcolors = document.getElementById('newcolor').value;
	      	$(this).attr('data-color', selectedcolors); // sets 
	      	$(this).attr('class', selectedcolors); // sets 
  			$(this).attr('data-color');

  			console.log(selectedcolors);
	      	
	  });

 
}

</script>

<!--FORM VALIDATIONS-->

<script type="text/javascript">
	
	function paste(){


		var name = document.getElementById('f1').value;
		document.getElementById("ff1").value = name;

		var mail = document.getElementById('f2').value;
		document.getElementById("ff2").value = mail;

		var pn = document.getElementById('f3').value;
		document.getElementById("ff3").value = pn;

		var p1 = document.getElementById('f4').value;

		if(p1 == ""){
			document.getElementById("ff4").value = "30cm";
		}else{
			document.getElementById("ff4").value = p1;
		}

		var p2 = document.getElementById('f5').value;
		
		if(p2 == ""){
			document.getElementById("ff5").value = "18cm";
		}else{
			document.getElementById("ff5").value = p2;
		}

		var p3 = document.getElementById('f6').value;

		if(p3 == ""){
			document.getElementById("ff6").value = "40cm";
		}else{
			document.getElementById("ff6").value = p3;
		}

		var remarks = document.getElementById('f7').value;
		document.getElementById("ff7").value = remarks;

	}

</script>

<!-----CABLE SELECTIONS-------->

<script>
function pickcable() {
  var two4 = document.getElementById("24pin");
  var cpupin = document.getElementById("cpu");
  var gpupin = document.getElementById("gpu");


  var two4pinshows = document.getElementById("24pinshow");
  var cpupinshows = document.getElementById("cpupinshow");
  var gpupinshows = document.getElementById("gpupinshow");

  var two4pinshows = document.getElementById("24pinshow");
  var cpupinshows2 = document.getElementById("cpupinshow2");
  var gpupinshows2 = document.getElementById("gpupinshow2");

  var spacebetween = document.getElementById("space");
  var showcolor = document.getElementById("showcolor");

  var gpusel = document.getElementById("gpuselection1");

  if(two4.checked == true){
  	cpu.checked = true;
  }else{
  	cpu.checked = false;
  	showcolor2.style.display = "none";
  }

  if(gpupin.checked == true){
  	gpusel.style.display = "block";
  }else{
  	gpusel.style.display = "none";
  }


  	if( (two4.checked && cpupin.checked && gpupin.checked) == true){
  		showcolor2.style.display = "inline-table";
    	showcolor1.style.display = "inline-table";
    	showcolor3.style.display = "inline-table";
    	spacebetween.style.height = "1350px";

  }
	else if( (two4.checked && cpupin.checked) == true || (two4.checked && gpupin.checked) == true || (cpupin.checked && gpupin.checked) == true ) {
		showcolor2.style.display = "inline-table";
    	showcolor1.style.display = "inline-table";
    	spacebetween.style.height = "880px";
    	showcolor3.style.display = "none";

    	showcolor2.style.width= "auto";
    	showcolor2.style.height= "auto";
  } else if (two4.checked || cpupin.checked || gpupin.checked == true ){ 
  	
  		showcolor1.style.display = "inline-table";
  		spacebetween.style.height = "380px";
  		showcolor2.style.display = "none";
  		showcolor3.style.display = "none";
  }
  else{
     	showcolor1.style.display = "none";
     	spacebetween.style.height = "0px";
  }


  if (two4.checked == true){
    two4pinshows.style.display = "block";
  } else {
     two4pinshows.style.display = "none";
  }


  if (cpupin.checked == true){
    cpupinshows2.style.display = "block";
     
  } else {
     cpupinshows2.style.display = "none";
  }

  if (gpupin.checked == true){
    gpupinshows2.style.display = "block";

  } else {
     gpupinshows2.style.display = "none";
  }

  if (two4.checked == true && cpupin.checked == true){
  	gpupinshows2.style.top = "900px";
  }else if( cpupin.checked == true){
  	cpupinshows2.style.top = "0px";
  }else if (gpupin.checked == true){
  	gpupinshows2.style.top = "0px";
  } 

  if(two4.checked == true && cpupin.checked == true){
  	cpupinshows2.style.top = "460px";
  }else if (cpupin.checked == true  && gpupin.checked == true && two4.checked == false){
  	cpupinshows2.style.top = "0px";
    gpupinshows2.style.top = "460px";
  }

  if(two4.checked == true && gpupin.checked == true && cpupin.checked == false){
  	gpupinshows2.style.top = "460px";
  }else if(two4.checked == true && gpupin.checked == true){
  	gpupinshows2.style.top = "900px";
  }

}
</script>
<!--380 880 1350-->


<!--  PIN Header Option -->
<script type="text/javascript">

function headeropt() {
  var x = document.getElementById("mySelect").value;
  var two4 = document.getElementById("24pin");
  var gpupin = document.getElementById("gpu");

  var stt = document.getElementById("stitle");

  document.getElementById("gputitle").getElementsByTagName('h2')[0].innerHTML = x;

  if(two4.checked == true){
  	stt.style.display = "block";
  }else{
  	stt.style.display = "none";
  }
  


  if (x == "6 Pin GPU"){
  	document.getElementById("c0").style = "display:block;";
  	document.getElementById("c1").style = "display:block;";
  	document.getElementById("c2").style = "display:block;";
  	document.getElementById("c3").style = "display:none;";
  	document.getElementById("c4").style = "display:none;";
  	document.getElementById("c5").style = "display:none;";
  	document.getElementById("c6").style = "display:none;";
  	document.getElementById("c7").style = "display:none;";
  	document.getElementById("c8").style = "display:none;";
  	document.getElementById("c9").style = "display:none;";
  	document.getElementById("c10").style = "display:none;";
  	document.getElementById("c11").style = "display:none;";
  }else if(x == "8 Pin GPU"){
  	document.getElementById("c0").style = "display:block;";
  	document.getElementById("c1").style = "display:block;";
  	document.getElementById("c2").style = "display:block;";
  	document.getElementById("c3").style = "display:block;";
  	document.getElementById("c4").style = "display:none;";
  	document.getElementById("c5").style = "display:none;";
  	document.getElementById("c6").style = "display:none;";
  	document.getElementById("c7").style = "display:none;";
  	document.getElementById("c8").style = "display:none;";
  	document.getElementById("c9").style = "display:none;";
  	document.getElementById("c10").style = "display:none;";
  	document.getElementById("c11").style = "display:none;";
  }else if(x == "12 Pin GPU"){
  	document.getElementById("c0").style = "display:block;";
  	document.getElementById("c1").style = "display:block;";
  	document.getElementById("c2").style = "display:block;";
  	document.getElementById("c3").style = "display:block;";
  	document.getElementById("c4").style = "display:block;";
  	document.getElementById("c5").style = "display:block;";
  	document.getElementById("c6").style = "display:none;";
  	document.getElementById("c7").style = "display:none;";
  	document.getElementById("c8").style = "display:none;";
  	document.getElementById("c9").style = "display:none;";
  	document.getElementById("c10").style = "display:none;";
  	document.getElementById("c11").style = "display:none;";
  }else if(x == "14 Pin GPU"){
  	document.getElementById("c0").style = "display:block;";
  	document.getElementById("c1").style = "display:block;";
  	document.getElementById("c2").style = "display:block;";
  	document.getElementById("c3").style = "display:block;";
  	document.getElementById("c4").style = "display:block;";
  	document.getElementById("c5").style = "display:block;";
  	document.getElementById("c6").style = "display:block;";
  	document.getElementById("c7").style = "display:none;";
  	document.getElementById("c8").style = "display:none;";
  	document.getElementById("c9").style = "display:none;";
  	document.getElementById("c10").style = "display:none;";
  	document.getElementById("c11").style = "display:none;";
  }else if(x == "16 Pin GPU"){
  	document.getElementById("c0").style = "display:block;";
  	document.getElementById("c1").style = "display:block;";
  	document.getElementById("c2").style = "display:block;";
  	document.getElementById("c3").style = "display:block;";
  	document.getElementById("c4").style = "display:block;";
  	document.getElementById("c5").style = "display:block;";
  	document.getElementById("c6").style = "display:block;";
  	document.getElementById("c7").style = "display:block;";
  	document.getElementById("c8").style = "display:none;";
  	document.getElementById("c9").style = "display:none;";
  	document.getElementById("c10").style = "display:none;";
  	document.getElementById("c11").style = "display:none;";
  }else if(x == "24 Pin GPU"){
  	document.getElementById("c0").style = "display:block;";
  	document.getElementById("c1").style = "display:block;";
  	document.getElementById("c2").style = "display:block;";
  	document.getElementById("c3").style = "display:block;";
  	document.getElementById("c4").style = "display:block;";
  	document.getElementById("c5").style = "display:block;";
  	document.getElementById("c6").style = "display:block;";
  	document.getElementById("c7").style = "display:block;";
  	document.getElementById("c8").style = "display:block;";
  	document.getElementById("c9").style = "display:block;";
  	document.getElementById("c10").style = "display:block;";
  	document.getElementById("c11").style = "display:block;";
  }
  



}


function confirmall(){

	var two4 = document.getElementById("24pin");
	var gpupin = document.getElementById("gpu");
	var x = document.getElementById("mySelect").value;

	if( two4.checked == true){

	var a0 = document.getElementById("a0").getAttribute('data-color');
	var a1 = document.getElementById("a1").getAttribute('data-color');
	var a2 = document.getElementById("a2").getAttribute('data-color');
	var a3 = document.getElementById("a3").getAttribute('data-color');
	var a4 = document.getElementById("a4").getAttribute('data-color');
	var a5 = document.getElementById("a5").getAttribute('data-color');
	var a6 = document.getElementById("a6").getAttribute('data-color');
	var a7 = document.getElementById("a7").getAttribute('data-color');
	var a8 = document.getElementById("a8").getAttribute('data-color');
	var a9 = document.getElementById("a9").getAttribute('data-color');
	var a10 = document.getElementById("a10").getAttribute('data-color');
	var a11 = document.getElementById("a11").getAttribute('data-color');

	result1 = "24 PIN CABLE = (1)" + a0 + " (2)" + a1 + " (3)" + a2 + " (4)" + a3 + " (5)" + a4 + " (6)" + a5 + " (7)" + a6 + " (8)" + a7 + " (9)" + a8 + " (10)" + a9 + " (11)" + a10 + " (12)" + a11;

	var b0 = document.getElementById("b0").getAttribute('data-color');
	var b1 = document.getElementById("b1").getAttribute('data-color');
	var b2 = document.getElementById("b2").getAttribute('data-color');
	var b3 = document.getElementById("b3").getAttribute('data-color');

	result2 = "4 PIN CPU CABLE = (1)" + b0 + " (2)" + b1 + " (3)" + b2 + " (4)" + b3;

	document.getElementById("24pincolor").value = result1;
	document.getElementById("cpucolor").value = result2;

	console.log(result1);
	console.log(result2);

	}

	if( gpupin.checked == true){

	var c0 = document.getElementById("c0").getAttribute('data-color');
	var c1 = document.getElementById("c1").getAttribute('data-color');
	var c2 = document.getElementById("c2").getAttribute('data-color');
	var c3 = document.getElementById("c3").getAttribute('data-color');
	var c4 = document.getElementById("c4").getAttribute('data-color');
	var c5 = document.getElementById("c5").getAttribute('data-color');
	var c6 = document.getElementById("c6").getAttribute('data-color');
	var c7 = document.getElementById("c7").getAttribute('data-color');
	var c8 = document.getElementById("c8").getAttribute('data-color');
	var c9 = document.getElementById("c9").getAttribute('data-color');
	var c10 = document.getElementById("c10").getAttribute('data-color');
	var c11 = document.getElementById("c11").getAttribute('data-color');

	result3 = x + " = (1)" + c0 + " (2)" + c1 + " (3)" + c2 + " (4)" + c3 + " (5)" + c4 + " (6)" + c5 + " (7)" + c6 + " (8)" + c7 + " (9)" + c8 + " (10)" + c9 + " (11)" + c10 + " (12)" + c11;

	document.getElementById("gpucolor").value = result3;


	console.log(result3);

	}

	
}
</script>


<script src='js/jquery-3.5.1.min.js'></script>
<script src='js/bootstrap.min.js'></script>


</html>
