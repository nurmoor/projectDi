<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jewelry</title> 
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly" defer></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<style type="text/css">
		*{margin: 0;
			padding:0;
			box-sizing: border-box;}
			
		#map {
			width: 300px;
        height: 100%;
      }

h1{
	font-family: 'Yeseva One', cursive;
}

body{
	
		background:url("back.png") no-repeat fixed center;
		/*text-align: center;*/
}

form{
	display: block;
}
form input{
	box-sizing: border-box;
	align-items: center;
	display: block;
}

 p {
	font-family: 'Montserrat', sans-serif;
}
.mein{border:3px solid silver;
	display: absolute;
	border-radius: 8px;
	background-color: white;
	margin:0px 50px 20px 50px;
	padding: 0px 50px 0px 50px;
	justify-content: space-around;
}

.modal {
    position: fixed; 
    width: 100%; 
    height: 100%;
    justify-content: center;
    align-items: center;
   top: 0;
   display: none;
   background-color: rgb(0,0,0,0.5);
z-index: 2;
}
.modal-content{
	background-color:white;
height: 400px;
width: 600px;
position: relative;
padding: 30px;
border-radius: 10px;
text-align: center;
display: block;

}

 
.closed {
	cursor: pointer;
    position: fixed;
    right: -15px;
    top: -15px;

    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}


   
.mein nav{
	margin-left: -25px;
	width: 1130px;
	padding: 0;
	/*min-width: 100%;*/ 
}
.form-control{
	align-items: center;
	width: 400px; margin-left: 150px; margin-bottom: 30px;
}
 nav{display: flex;
 justify-content: space-around;
align-items: center;
min-height: 8vh;
background-color: white;
position: fixed;
z-index: 2;
font-family: 'Montserrat', sans-serif;}

.logo{
				color: black;
				text-transform: uppercase;
				letter-spacing: 5px;
				font-size: 30px;
				
				
			}
			.nav-links{
				display: flex;
				justify-content: space-around;
				width: 60%;
				
			}
			.nav-links li{
				margin-top: 10px;

				list-style: none;
				

			}
			.nav-links a{
				color: black;
				
				text-decoration: none;
				letter-spacing: 3px;
				
				font-size: 20px;
			}
			.burger{
				display: none;
				cursor: pointer;
			}
			.burger div{
				width: 25px;
				height: 3px;
				background-color: black;
				margin:5px; 
			}
			@media  screen and (max-width:500px){
				body{ margin:0;
					
					overflow-x:hidden; }
.mein nav{
	max-width: 480px;

}
				.mein{
					margin:0px; 	

				}
				.logo{
					 
				}
				.nav-links a{
					font-size: 15px;
					font-weight: bold;}
				.nav-links{

					width: 30%;
					position: absolute;
					right: 0px;
					height: 192vh;
					top: 8vh;
				
					
					flex-direction: column;
					align-items: center;
					transform: translateX(100%);
					transition: transform 0.5s ease-in;
				}
				.nav-links li{

			/*		opacity: 0;*/

				}
				.form-control{
					align-items: center;
					margin: 0;
				}
				.burger{
					margin-left: 150px;
					display: block;
				}




input {
align-items: center;
margin:0; 
}
h1{
	font-size: 40px;
}
hr{
	margin-top: 30px;
	margin-bottom: 30px;
}
#alli{
	display: none;
}
p{font-size: 15px;}

			}
			.nav-active{
				transform: translateX(00%);
			}


label{
    margin:8px 0 0 20px;
    font-size:32px;
}

@media  screen and (max-width: 738px){
	#divka_mob{
		max-width:738px;
	}
	#gl{
		width: 200px;
		height: 300px;
	}
}

.mySlides {display:none;}
#toggle{
	display: none;
}

	</style>

</head>



<body onload = "startTimer()">
	<div class="mein">
		
<nav >
		<div class="logo" onclick="window.location.reload()" >DIDI</div>

		  <ul class="nav-links">
		  	<!-- onmouseover="big(this)" onmouseout="small(this)" -->
	    <li  id="h" id="Rings" onclick="change(this)" ><a href="#Rings" ><?php echo e(__('text.rings')); ?></a></li>
		<li id="h" onclick="change(this)"><a href="#Bracelets">
		<?php echo e(__('text.bracelets')); ?></a></li>
		<li id="h"><a href="#Order">
		<?php echo e(__('text.order')); ?></a></li>
		<li  id="h" id="shop"  onclick="change(this)" style="width:auto;"><a href="#Contact" ><?php echo e(__('text.contact')); ?></a></li>
		<li  id="h" id="shop" onclick="popup()" onclick="change(this)" style="width:auto;"><a href="#Location" >
		<?php echo e(__('text.location')); ?></a></li></ul>
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Language</button>
    <ul class="dropdown-menu">
      <li><a href="lang/en">EN</a></li>
      <li><a href="lang/ru">RU</a></li>
    </ul>
  </div>
		<div class="burger" class="nav-active">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
</nav>
<div id="divka_mob">
	<div class="divka" style="background-color: #FFF8DC; margin: 50px -20px 30px -20px; padding-bottom:20px; " >
  <div class="glavnoe" style="width: 430px; height: 450px;  ">

  	<img id="gl" style="float:left; margin:15px 10px 0 50px; width: 430px; height: 450px; " src="<?php echo e(asset('images/4.png')); ?>"></div>

 <div class="glavnoe_2" style="float: right; margin-top: -450px;">

    <img id="gl" style="position:relative;left:70%; width: 190px; height: 220px; margin:25px 115px 0 10px;" src="<?php echo e(asset('images/13.png')); ?>">
	<h1 id="text" style="position:absolute;left:60%; margin: -150px 160px 100px -185px; font-size: 70px;"><?php echo e(__('text.jewellery')); ?></span></h1>
   

	<div class="slovo" style="margin: 40px 15px 0px 20px; font-size: 18px;">
<p style="position:relative; left:70%; width: 20%;"><?php echo e(__('text.des1')); ?><br><br></p>
	</div>
	</div>
</div>

<hr id="alli" style="margin-top: 100px; margin-bottom: 90px; ">

<div id="divochka_mob">
	<div class="divochka" style="background-color: #FFE4E1; width: 100%; height: 500px;">
	<img id="gl" style="width: 190px; height: 240px; margin: -10px 20px 50px 60px ;" src="<?php echo e(asset('images/9.png')); ?>">
	<img id="gl" style="width: 160px; height: 240px; margin: 10px 20px 0 120px;" src="<?php echo e(asset('images/5.png')); ?>">

	<div style="margin: 10px 20px 0 60px; ">
	<h1><?php echo e(__('text.des2')); ?></h1>
	<p style="width: 35%;"><?php echo e(__('text.des3')); ?></p>
	</div>
<!-- <div style="margin:-540px 50px 0 0;">

 -->	<img id="gl" style="float: right; width: 400px; height: 550px; margin:-540px 50px 0 0; " src="<?php echo e(asset('images/10.png')); ?>">
	<h1 style="margin: -80px 0 0 474px; font-size: 50px;"><?php echo e(__('text.since')); ?><span style="color: white;"><?php echo e(__('text.date')); ?></span></h1>
<!-- </div> -->
</div>
</div>
<hr style="margin-top: 100px; margin-bottom: 90px;">
<div id="Rings_mob">
<div id="Rings" style="background-color:#E0FFFF; padding-top: -30px; width: 100%; height: 500px; ">
	<img id="gl" style="float: left; margin: 0 -46px 20px 50px; width: 400px; height: 500px;" src="<?php echo e(asset('images/2.png')); ?>">
	<h1 style="font-size:50px;margin:0px -54px 30px -15px;"><?php echo e(__('text.des4')); ?></h1>
	<div class="text-rings" style="margin:60px -100px 0 500px; ">
	<p style="width: 45%; font-size:15px"><?php echo e(__('text.des5')); ?></p>
</div>

<img id="gl" style="width: 200px; height: 350px; margin: -730px 0 20px 860px;" src="<?php echo e(asset('images/23.png')); ?>">

</div>
</div>
<hr style="margin-top:140px; margin-bottom: 90px;">

<div id="Bracelets_mob">
<div id="Bracelets" class="w3-container" style="background-color: #FFDAB9; padding-top: 50px; width: 100%; height: 500px; ">

<div id="gl" class="w3-content w3-section" style=" max-width:300px; float: right; height: 450px; margin: 0px 130px 0 0px ; ">
  <img class="mySlides w3-animate-top" src="<?php echo e(asset('images/8.png')); ?>" style="width:400px; height: 500px;">
  <img class="mySlides w3-animate-left" src="<?php echo e(asset('images/br.png')); ?>" style="width:400px; height: 500px;">
  <img class="mySlides w3-animate-right" src="<?php echo e(asset('images/br3.png')); ?>" style="width:400px; height: 500px;">
  <img class="mySlides w3-animate-bottom" src="<?php echo e(asset('images/9.png')); ?>" style="width:400px; height: 500px;">
   <img class="mySlides w3-animate-top" src="<?php echo e(asset('images/br1.png')); ?>" style="width:400px; height: 500px;">
    <img class="mySlides w3-animate-left" src="<?php echo e(asset('images/1.png')); ?>" style="width:400px; height: 500px;">

</div>
<div>
	<h1 style="font-size: 60px;">
<?php echo e(__('text.bracelets')); ?></h1><br><br>
<p><?php echo e(__('text.des6')); ?></p>

<marquee scrollamount="20" width="500px"   >
    <p style="font-size: 30px; margin-top: 80px;"><?php echo e(__('text.didi')); ?></p>
  </marquee>
</div>
</div>
</div>

<hr style="margin-top:100px; margin-bottom: 50px;">

<div id="Order_mob">
<div id="Order" style="background-color: #F0FFF0; margin-top:  10px; padding-top: 120px; margin-bottom: 20px; text-align: center; margin-left:300px; width: 500px; height: 600px; ">
	<h1><span><?php echo e(__('text.ordertrack')); ?> </span></h1>
	<div style="margin-top: 20px;">
		<p style="margin-top: -10px; margin-bottom: -30px;"><?php echo e(__('text.des7')); ?></p>
	</div>
  <form action="<?php echo e(route('upload')); ?>" method="post" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
<div style="margin:50px 30px -20px -100px;text-align: center;" class="form-group">
    <input style=" width: 400px;" type="text" class="form-control" name="name" id="exampleInputEmail2" placeholder="Name">
  </div>
  <div style="margin:10px 30px 10px -100px;text-align: center;"  class="form-group">
  <input style=" width: 400px;" type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div style="margin:0px 0px 0px -100px;text-align: center; position:relative; top:-20px;"  class="form-group">
  <input style=" width: 400px;" type="text" class="form-control" name="order_number" placeholder="Order number">
  </div>
  <div style="margin:0px 0px 0px -100px;text-align: center; position:relative; top:-40px;"  class="form-group">
  <input style=" width: 400px;" type="file" class="form-control" name="file" placeholder="Your jewellery image">
  </div>
  <p style="margin-top: 30px; margin-bottom: -20px;"><?php echo e(__('text.des8')); ?></p><br>
  <button style="width:400px;  margin-top: 20px;" type="submit" class="btn btn-dark"><?php echo e(__('text.des9')); ?> </button>
</form>

</div>
</div>

<hr style="margin-top: 90px; margin-bottom: 50px;">

<div id="Contact_mob">
<div id="Contact" style="background-color: #E6E6FA; padding-top:50px;margin-top: 30px;">
	<h1 style="font-size: 40px;"><?php echo e(__('text.des10')); ?></h1>
		<div class="inst" style="display: flex;justify-content: space-around;">
			<img style="width: 250px; height: 250px;" src="<?php echo e(asset('images/cep1.png')); ?>">
			<img style="width: 250px; height: 250px;" src="<?php echo e(asset('images/44.png')); ?>">
			<img style="width: 250px; height: 250px;"src="<?php echo e(asset('images/uxo.png')); ?>">
			<img style="width: 250px; height: 250px;"src="<?php echo e(asset('images/ruk.png')); ?>">
		</div>
		<p style="font-size:20px; margin-top: 50px; "><?php echo e(__('text.des11')); ?></p>



<div class="contact" style="text-align: center; margin:60px 200px 10px 200px;">
     <h1 style="font-size: 20px; margin-bottom: 30px;"><?php echo e(__('text.des12')); ?></h1>
	<form class="form-block" action="<?php echo e(route('send-mail')); ?>" method="POST" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
   <div style="margin-left: -21px;" class="form-group">
    <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="E-mail address">
  </div>
  <button style="width: 400px; margin-top: -20px; margin-bottom: 30px; " type="submit" class="btn btn-dark"><?php echo e(__('text.send')); ?></button>
</form>
</div>
</div>
</div>

<hr style="margin-top: 50px;">
<!-- <div id="map">
		
	</div> -->
	<div id="Footer">
<div style="text-align: center; margin:30px 250px 10px 250px; padding: 30px 10px 0px 10px;">
	<address>
		
		877734647382<br>
		Kazakhstan, Karaganda<br>
		Respublika,21<br>
		233 Office<br><br>
		©2020 by DIDI
	</address> 
	</div>

</div> 


<div id="id01"  class="modal" >
  <div class="modal-content">
<div style=" height: 300px; width: 100%;" id="map"></div>

<h1 style="font-size: 20px;">See different Jewelry Stores on Google Map!!!</h1>
</div>
  	<img class="closed" onclick="close_popup()" style="width:2%; border-radius: 50%; margin:100px 320px 0 0; " src="https://www.pngfind.com/pngs/m/90-904785_png-file-svg-close-button-icon-png-transparent.png">
  	
  </div>
</div>

<script type="text/javascript"  >
	
	
	function popup(){
      	document.querySelector(".modal").style.display = "flex";
      
      }
    function close_popup(){
      	document.querySelector(".modal").style.display = "none";
      	}


var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}

// MAaaaaaaaaaaaaaaaaaaaaP
let map;
 
 function initMap() {

const cen = {lat:49.83333,lng:73.1658};
  const map = new google.maps.Map(document.getElementById("map"), {
    center: cen,
    zoom: 10,
    mapTypeId: "terrain",

        });

const flightPlanCoordinates = [
    { lat:49.805533316706814,lng:73.08530153859004},
    {lat:49.802771488992775, lng:73.08389162572655},
    {lat:49.802450688131046, lng:73.08420956004367},
    {lat:49.8042415481897, lng:73.08649776207709},
    {lat:49.8047826924433, lng:73.08801906088378},
    {lat:49.78716455687155,lng:73.10824524722874},

    // { lat:49.78716455687155,lng:73.10824524722874},
   
  ];

  const flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: "red",
    strokeOpacity: 1.0,
    strokeWeight: 5,
  });
  flightPath.setMap(map);

    const image ={
  url: "https://images.vexels.com/media/users/3/199996/isolated/preview/f79ce454b6b358fcc1275f74173da3d6-location-icon-isometric-by-vexels.png",
   scaledSize: new google.maps.Size(30,30),
     origin: new google.maps.Point(0,0),
    anchor: new google.maps.Point(0,0)
};
 const Marker3 = new google.maps.Marker({
      position: {lat:49.802771488992775, lng:73.08389162572655},
      map, 
      icon: image,
       title: "La Bijouterie Swarovski",
      });

        const contentString3 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 style="font-size:20px; id="firstHeading" class="firstHeading">La Bijouterie Swarovski</h1>' +
          '<div id="bodyContent">'  +
          '<p>Read information here: La Bijouterie Swarovski, <a href="https://zoon.kz/karaganda/shops/salon_yuvelirnyh_ukrashenij_la_bijouterie_swarovski-8c09/">' +
          "La Bijouterie Swarovski</a></p>" +
          "</div>" +
          "</div>";
        const infowindow3 = new google.maps.InfoWindow({
          content: contentString3,
        });
      
        Marker3.addListener("click", () => {
          infowindow3.open(map, Marker3);
        });

const Marker4 = new google.maps.Marker({
      position: {lat:49.8042415481897, lng:73.08649776207709},  
      map, 
      icon: image,
       title: "TSUM",
      });

        const contentString4 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 style="font-size:20px; id="firstHeading" class="firstHeading">TD TSUM</h1>' +
          '<div id="bodyContent">'  +
          '<p>Read information here: <a href="https://karaganda.tsum.kz/ru/">' +
          "TSUM</a></p>" +
          "</div>" +
          "</div>";
        const infowindow4 = new google.maps.InfoWindow({
          content: contentString4,
        });
      
        Marker4.addListener("click", () => {
          infowindow4.open(map, Marker4);
        });

const Marker5 = new google.maps.Marker({
      position: {lat:49.8047826924433, lng:73.08801906088378},  
      map, 
      icon: image,
       title: "Abzal",
      });

        const contentString5 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 style="font-size:20px; id="firstHeading" class="firstHeading">Abzal</h1>' +
          '<div id="bodyContent">'  +
          '<p>Read information here: <a href="https://www.instagram.com/abzal.karaganda/">' +
          "Abzal</a></p>" +
          "</div>" +
          "</div>";
        const infowindow5 = new google.maps.InfoWindow({
          content: contentString5,
        });
      
        Marker5.addListener("click", () => {
          infowindow5.open(map, Marker5);
        });

const Marker6 = new google.maps.Marker({
      position: {lat:49.802450688131046, lng:73.08420956004367}, 
      map, 
      icon: image,
       title: "ASIA",
      });

        const contentString6 =
          '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 style="font-size:20px; id="firstHeading" class="firstHeading">ASIA</h1>' +
          '<div id="bodyContent">'  +
          '<p>Read information here: <a href="https://2gis.kz/karaganda/firm/11822477302826957">' +
          "ASIA</a></p>" +
          "</div>" +
          "</div>";
        const infowindow6 = new google.maps.InfoWindow({
          content: contentString6,
        });
      
        Marker6.addListener("click", () => {
          infowindow6.open(map, Marker6);
        });



    const Marker = new google.maps.Marker({
      position: {lat:49.78716455687155,lng:73.10824524722874},
      map,
      icon: image, 
      title:"Yuvelirnoye Predpriyatiye 'Zhemchuzhina'",
      });
     const contentString =
          '<div  id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 style="font-size:20px;" id="firstHeading" class="firstHeading">Yuvelirnoye Predpriyatiye Zhemchuzhina</h1>' +
          '<div id="bodyContent">'  +
          '<p>Read information here: Yuvelirnoye Predpriyatiye Zhemchuzhina, <a href="https://vymaps.com/KZ/-107336/">' +
          "Zhemchuzhina</a></p>" +
          "</div>" +
          "</div>";
        const infowindow = new google.maps.InfoWindow({
          content: contentString,
        });
      
        Marker.addListener("click", () => {
          infowindow.open(map, Marker);
        });


    const Marker2 = new google.maps.Marker({
      position: {lat:49.805533316706814,lng:73.08530153859004},
      map,  
      icon: image,
       title:  "B2B Jewelry",
      });

        const contentString2 =
          '<div style="z-index2;" id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 style="font-size:20px; id="firstHeading" class="firstHeading">B2B Jewelry</h1>' +
          '<div id="bodyContent">'  +
          '<p>Read information here: B2B Jewelry, <a href="https://b2b-jewelry-kz.com/karaganda.html">' +
          "B2B Jewelry</a></p>" +
          "</div>" +
          "</div>";
        const infowindow2 = new google.maps.InfoWindow({
          content: contentString2,
        });
      
        Marker2.addListener("click", () => {
          infowindow2.open(map, Marker2);
        });


      }
// SCROLLLLLLLLL
   $(document).ready(function(){
	// плавное перемещение страницы к нужному блоку
	$("nav li a").click(function () {
		elementClick = $(this).attr("href");
		destination = $(elementClick).offset().top;
		$("body,html").animate({scrollTop: destination }, 800);
	});
});
// NAVBAR 
    const navSlide = () => {
    	const burger = document.querySelector('.burger');
    	const nav = document.querySelector('.nav-active');
    	burger.addEventListener('click',() => {
    		nav.classList.toggle('nav-active');
    	});
    }
navSlide();


</script>
</body>
</html><?php /**PATH C:\xxampp\htdocs\didi\resources\views/index.blade.php ENDPATH**/ ?>