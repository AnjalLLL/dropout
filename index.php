 <?php echo get_template_directory_uri(); 
      bloginfo('template_directory')
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Baymax</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/08f51fbdfd.js" crossorigin="anonymous"></script>
    <style>`
	body {
  background-color: lightblue;
}
div.logo {
  
  text-align:center;
  font-size: 40px;
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  background-color:#7FFD4
  width: auto;
  padding: 10px;
  border: 1px;
  margin: 0;
}
ul {
  list-style-type: none;
  margin: 5;
  padding: 12;
  overflow: hidden;
  background-color: #F3D636;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
  
  div.landimage {
    padding: 5px;
    margin: px;
  border: 1px solid #ccc;
  float: left;
  height:1000
  width: 1300;
  }
  div.appointment {
    width: 33.33%;
  float: left;
  padding: 15px;
  border: 1px solid red;
  }
  .item1 { grid-area: Request Appointment; }
.item2 { grid-area: Our services; }
.item3 { grid-area: Our doctors; }
  .grid-container {
  display: flex;
  grid-template-areas:
    'Request appointment   Our services    Our doctors ';
  gap: 30px;
  background-color:;
  padding: 10px;
}
.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
</style>
</head>

<body>
   <div class="logo" ><i class="fas fa-heart"></i>Baymax</div>
	
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<div class="landimage"> <img src="<?php bloginfo('template_url'); ?>/img/new.jpg"/> </div>

<div class="grid-container">
<button style="font-size:24px">Button </button>
 <bottom>  class="item1">Request Appointment </bottom>
 <bottom>  class="item2">Our services </bottom>
  <bottom> <div class="item3">Our doctors</div>  </bottom>
</div>  
</body>
</html>
	
