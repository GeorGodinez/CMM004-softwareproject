<?php 
session_start();
?>

<!DOCTYPE html>    
<html lang="eng">
<head>
  <meta charset="UFT-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Business Directory</title>
    <link rel ="stylesheet" href="./stylemarvel.css">
    <link href="./css/bootstrap.min.css"rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
  <body>
<!--Header Starts-->
  <header>
<!--Navigation Start-->
<nav>
    <div class="flex align-items-center">
        <img src="./Asset/Marvel business logo_ccexpress.png" alt="brand-logo"/>
    </div>
    <div class="navbar-items">
        <a href="index.html">Home</a>
        <a href="directory.php">Directory</a>
        <a href="aboutus.html">Our team</a>
        <a href="contact.php">Contact us</a>
        <button class="button cart-button"> Sign up </button>
        <button class="button cart-button"> login </button>
    </div>
</nav>
<!--Navigation Ends-->
   </header>
<!--Header Ends-->
<!--Main Starts-->
<main class = "flex align-items-center">
      <h1 class= "h1-responsive font-weight-bold text-center my-4">Gadget Stores</h1>
      <p class = "writeup">Looking for a gadget? Our registered Gadget Stores are your best option!</p>
      <br>
      <image class ="flex align-items-center" src="./Asset/carousel/gadgetstore4.jpg" alt="Gadget Stores" id="teamimage" ></image>
      <br><br><br>
   <div>
		<table class="text-center">
			<tr>
				<th>Business Name</th>
				<th>Location</th>
        <th>Phone Number</th>
        <th>Mail address</th>
        <th>Website</th>
			</tr>
      <tr>
				<td>CeX</td>
				<td>46 Union St, Aberdeen AB10 1BD</td>
        <td>0330 1235986</td>
        <td></td>
        <td>https://uk.webuy.com/</td>
			</tr>
      <tr>
				<td>Currys</td>
				<td>Berryden Retail Park, Aberdeen AB25 3SG</td>
        <td></td>
        <td></td>
        <td>https://www.currys.co.uk</td>
			</tr>
      <tr>
				<td>Aberdeen repair centre</td>
				<td>275 George St, Aberdeen AB25 1ED</td>
        <td>01224 566122</td>
        <td>david.quinlan610@gmail.com</td>
        <td>http://www.aberdeenrepaircentre.co.uk</td>
			</tr>
      </table>
    <br><br><br>
    <!--(www.w3schools.com, n.d.)-->
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #DDD;
    }
    
    tr:hover {background-color: #D6EEEE;}

    td {
      font-size: 10pt;
    }

    </style>
    </div>
  </main>
<!--Main Ends-->
<!--Start of Footer-->
<br>
  <footer>
    <section id="grey-footer">
        we make it easy to find genuine businesses in Aberdeen
    </section>
    <section id="dark-footer">
        &copy; Copyright 2021, M Team
    </section>
</footer>
<!--End of Footer-->
  </body>
</html>