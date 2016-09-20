<?php 

	$username = $_POST['username'];
	$name1 = $_POST['name1'];
	$image = $_POST['image'];
	$special = $_POST["special"];

 ?>


<!DOCTYPE html>
<html> 

<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="./img/pic1.png" />
     
	<title>View Dishes</title>
	<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
	<script type="text/javascript">

	function myFunc(id){

		var s = parseInt(document.getElementById(id).innerText);
            
            new_s= s+1;
            //alert(news);
            document.getElementById(id).innerText=new_s;

        }   

        function showDiv(id1,id2,id3,id4,id5,id6,id7,id8) {
        	document.getElementById('popupDiv').style.display = "block";
       		document.getElementById('enter_bg').style.background = "rgba(239, 232, 232, 0.66) url('./img/Shape 29.png') no-repeat";
      		document.getElementById('enter_bg').style.top="0%";
		   //not display other elements
		    document.getElementById('container').style.display = "none";
			document.getElementById('search').style.display = "none";
			document.getElementById('search-input').style.display = "none";		   
			document.getElementById('sub').style.display = "none";
			var name = document.getElementById(id1).innerText;
            var username = document.getElementById(id2).innerText;
            var special = document.getElementById(id5).innerText;
             var img = document.getElementById('img1').src;
            document.getElementById(id3).innerText=name;
            document.getElementById(id4).innerText=username;
            document.getElementById(id6).innerText=special;
            document.getElementById('img1-1').src=img;


		}

		function notshowDiv(){
			document.getElementById('popupDiv').style.display = "none";
			document.getElementById('enter_bg').style.background = "";
      		document.getElementById('enter_bg').style.top="1%";

			//not display other elements
			   document.getElementById('container').style.display = "block";
				document.getElementById('search').style.display = "block";
				document.getElementById('search-input').style.display = "block";		   
				document.getElementById('sub').style.display = "block";

		}



	</script>

</head>
	<div id="popupDiv" style="display: none;">

	<div style=" width: 55px;  margin-top: 85px; margin-left: 667px; ">
	<input type="button" value="CLOSE X" onclick="return notshowDiv()" />
	</div>

	<img id="img1-1" src="" style="background-color: #ffffff; box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75); width: 420px; height: 340px;  margin-left: -97px; margin-top: 10px;">

	<div style="margin-left: 300px;margin-top: 360px; float: left;   width: 100px;">
		<strong> <span id="username1-1"></span> <br> Entry No. 10  </strong> 
	</div>

	<div style="margin-left: 400px; margin-top: 10px;width: 180px;">
		<strong> <span id="name1-1"></span> <br> <span id="special1-1"></span> </strong> 
	</div>

<img src="./img/e1.png"  style="  margin-top: -56px;   margin-left: 532px;">
<img src="./img/e.png" style="  margin-top: -56px;  margin-left: 20px; ">
	</div>



<body id="dishesbg">

	<div id="enter_bg">

		<input type="submit" onclick="location.href='./enter.php'" id="sub" value="" class="imgClass2" /><br><br><br><br><br>
					<label for="Search" id="search">SEARCH </label>&nbsp;&nbsp;&nbsp;&nbsp; <!-- Spaces -->
					<input type="text" id="search-input" value="NAME OR CONTESTANT N0." >
					<br>


		<div class="container" id="container">
					<!-- WORKING EXAMPLE -->
					<div id="item1" style=" margin-top: 40px; margin-left: -3px;" ><img id="img1" src="./img/<?php echo $image; ?>" onclick="showDiv('name1','username','name1-1','username1-1','special','special1-1')" style=" margin-top: 150px; float: left; margin-left: 335px; width: 162px;"> 
					<img src="./img/LikeButton.png" onclick="myFunc('like1')" style="margin-left: 288px;   margin-top: 220px;">
						<span style=" margin-left: 285px;"><span id="like1">12</span> LIKES</span>
						<p class="imgDescription" style = "font-style:italic;font-size:10px;" >
		         			<span id="name1"><?php echo $name1; ?></span> <br> <span id="username"><?php echo $username;?></span> <br>Entry No. 10 
		         			<span id="special" style="display:none; visibility:hidden"> <?php echo $special; ?> </span>
		       			</p>
    				</div>
    				<!-- END OF WORKING EXAMPLE -->


    				<div id="item2"  style=" margin-top: -15px; margin-left: -3px;"> <img src="./img/picture1.png" style=" margin-top: 150px; float: left; margin-left: 560px; ">
					
						<img src="./img/LikeButton.png" onclick="myFunc('like2')" style="  margin-left: 512px;  margin-top: 220px;">
						<span style="  margin-left: 515px;" ><span id="like2">12</span> LIKES</span>
					
						<p class="imgDescription2" style = "font-style:italic;font-size:10px;" >
		         			Tomato Soup <br> Mais Sartawi Mohammed <br>Entry No. 10 
		       			</p>
    				</div>

    				<div id="item1" style=" margin-top: 137px; margin-left: -3px;" > <img src="./img/picture1.png" style="  margin-top: 300px; float: left; margin-left: 335px; ">
					<img src="./img/LikeButton.png" onclick="myFunc('like3')" style="margin-left: 288px;   margin-top: 375px;">
						<span style=" margin-left: 285px;"><span id="like3">12</span> LIKES</span>
						<p class="imgDescription" style = "font-style:italic;font-size:10px;   margin-top: 159px;" >
		         			Tomato Soup <br> Mais Sartawi Mohammed <br>Entry No. 10 
		       			</p>
    				</div>

    				<div id="item2" style=" margin-top: -15px; margin-left: -3px;"> <img src="./img/picture1.png" style="  margin-top: 300px; float: left; margin-left: 560px; ">
					
						<img src="./img/LikeButton.png" onclick="myFunc('like4')" style="  margin-left: 512px;   margin-top: 375px;">
						<span style="  margin-left: 515px;" ><span id="like4">12</span> LIKES</span>
					
						<p class="imgDescription2" style = "font-style:italic;font-size:10px;   margin-top: 159px;" >
		         			Tomato Soup <br> Mais Sartawi Mohammed <br>Entry No. 10 
		       			</p>
    				</div>

    				<div id="item1" style=" margin-top: 137px; margin-left: -3px;"> <img src="./img/picture1.png" style="  margin-top: 450px; float: left; margin-left: 335px; ">
					<img src="./img/LikeButton.png" onclick="myFunc('like5')" style="margin-left: 288px;   margin-top: 530px;">
						<span style=" margin-left: 285px;"><span id="like5">12</span> LIKES</span>
						<p class="imgDescription" style="font-style:italic;font-size:10px; margin-top: 310px;">
		         			Tomato Soup <br> Mais Sartawi Mohammed <br>Entry No. 10 
		       			</p>
    				</div>

    				<div id="item2" style=" margin-top: -15px; margin-left: -3px;"> <img src="./img/picture1.png" style="  margin-top: 450px; float: left; margin-left: 560px; ">
					
						<img src="./img/LikeButton.png" onclick="myFunc('like6')" style="  margin-left: 512px;   margin-top: 530px;">
						<span style="  margin-left: 515px;"><span id="like6">12</span> LIKES</span>
					
						<p class="imgDescription2" style="font-style:italic;font-size:10px; margin-top: 310px;">
		         			Tomato Soup <br> Mais Sartawi Mohammed <br>Entry No. 10 
		       			</p>
    				</div>

		</div>
</body>
</html>