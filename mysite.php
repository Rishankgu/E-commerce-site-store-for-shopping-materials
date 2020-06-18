
<html>
<head>
<style type="text/css">
table, th, tr
{
border: 1px solid black;
    border-collapse:collapse;
    background-color:#008B8B;
}
 input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
div.gallery
{
margin: 5px;
border: 1px solid #ccc;
    float:left;
width:300;
height:300;
}

div.gallery:hover {
border: 1px solid #777;
}

div.gallery img {
width:300;
height:300;
}

div.desc {
padding: 15px;
    text-align: center;
}
#map{
height: 500px;
width: 97%;
margin: 20px;
}
.topnav {
overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
display: block;
color: #f2f2f2;
    text-align: center;
padding: 15px 20px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
color: blue;
}
/* Style the header */
.header {
    background-color:
    #8FBC8F;
padding: 10px;
    text-align: center;
}
ul {
    list-style-type: none;
margin:5px;
padding:25px;
overflow: hidden;
    background-color:#F0F8FF;
    text-color:red;
}

li {
    float: left;
}

</style>
</head>
<center>
<body style="background-color:#FFE4C4";>
<div class="header">
<h1><b>Store<b></h1>
</div>


<div class="topnav">
<a href="about.php">About us</a>
<a href="products.php">Our products</a>
<a href="contact.php">Contact us</a>
<a href="order.php">Your order</a>
<a href="feedback.php">Your feedback</a>
<a href="share.php">Share</a>
<a href="mypage.php">logout</a>
 <input type="text" placeholder="Search..">
</div>
<br>
<div class="gallery">
<a target="_blank" href="https://www.flipkart.com/sports-fitness-gear-store?otracker=nmenu_sub_Sports%2C%20Books%20%26%20More_0_Sports">
<img src="cricket.png" alt="sports items" width="800" height="600">
</a>
<div class="desc">SPORTS ITEMS</div>
</div>
<div class="gallery">
<a target="_blank" href="https://www.flipkart.com/mens-clothing/pr?sid=2oq,s9b&otracker=categorytree&otracker=nmenu_sub_Men_0_Clothing">
<img src="fashion.png" alt="clothing items" width="800" height="500">
</a>
<div class="desc">clothings</div>
</div>
<div class="gallery">
<a target="_blank" href="https://www.flipkart.com/mobile-phones-store?otracker=nmenu_sub_Electronics_0_Mobiles">
<img src="electronics.png" alt="electronics items" width="800" height="800">
</a>
<div class="desc">electronics</div>
</div>
<div class="gallery">
<a target="_blank" href="https://www.flipkart.com/mobile-phones-store?otracker=nmenu_sub_Electronics_0_Mobiles">
<img src="home.png" alt="furniture items" width="800" height="800">
</a>
<div class="desc">FURNITURE</div>
</div><br>

<div class="gallery">
<a target="_blank" href="https://www.flipkart.com/mobile-phones-store?otracker=nmenu_sub_Electronics_0_Mobiles">
<img src="toy.jpeg" alt="toys items" width="800" height="800">
</a>
<div class="desc">TOYS</div>
</div>
<div class="gallery">
<a target="_blank" href="https://www.flipkart.com/mobile-phones-store?otracker=nmenu_sub_Electronics_0_Mobiles">
<img src="books.jpg" alt="books" width="800" height="800">
</a>
<div class="desc">books</div>
</div>
<div class="gallery">
<a target="_blank" href="https://www.flipkart.com/mobile-phones-store?otracker=nmenu_sub_Electronics_0_Mobiles">
<img src="phone.jpeg" alt="smartphone" width="800" height="800">
</a>
<div class="desc">SMARTPHONES</div>
</div>
<div class="gallery">
<a target="_blank" href="https://www.flipkart.com/mobile-phones-store?otracker=nmenu_sub_Electronics_0_Mobiles">
<img src="shoe.jpg" alt="shoe" width="800" height="800">
</a>
<div class="desc">FOOTWEAR</div>
</div>
<div class="column side">

<h2>ALSO AVAILABLE:-</h2>
<ul>
<li>School items.</li>
<li>Travelling bag.</li>
<li>Belts and Wallets.</li>
<li>Grocries.</li>
<li>Kitchen utensils.</li>
<li>Home decor.</li><b>
<li>Cosmatics.</li>
<li>Gifts.</li>
<li>Mobile accessories.</li>
</ul>
<button onclick="displayDate()">time is?</button>
</div>
<div id="map"></div>
		<script>
			function initMap()
			{
				var location = {lat: 26.760759, lng: 83.373703};
				var map = new google.maps.Map(document.getElementById("map"), {
					zoom: 4,
					center: location
				});
			}
		</script>
		<script async defer src ="http://maps.googleapis.com/maps/api/js?key=AIzaSyDRPXX_P2Tfr9RE0pfntF3ZjuB4NeKH2E8&callback=initMap"></script>

<script>
function displayDate() {
    document.getElementById("demo").innerHTML = Date();
}
</script>
<p id="demo"></p>


</body>
</center>
</html>
