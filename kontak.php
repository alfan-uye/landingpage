<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  * {
  box-sizing: border-box ;
}
ul.menuatas {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #1e1e1e;
}

ul.menuatas li {float: left;}

ul.menuatas li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.menuatas li a:hover {background-color: #000000;}
ul.menuatas li.icon {display: none;}


@media screen and (max-width:680px) {
  ul.menuatas li:not(:first-child) {display: none;}
  ul.menuatas li.icon {
    float: right;
    display: inline-block;
  }
}



@media screen and (max-width:680px) {
  ul.menuatas.responsive {position: relative;}
  ul.menuatas.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.menuatas.responsive li {
    float: none;
    display: inline;
  }
  ul.menuatas.responsive li a {
    display: block;
    text-align: left;
  }
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

.active {
  background-color: #1e1e1e;
}
header {
  text-align: center;
  background-color:  #c0c0c0;
}
article {
  font-family: Verdana, sans-serif;
  float: left;
  padding: 16px;
  width: 100%;
  background-color: #E0FFFF;
  color:black;
  /* only for demonstration, should be removed */
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #1e1e1e;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:  #000000;
}


.container {
  border-radius: 5px;
  background-color:  #c0c0c0;
  padding: 20px;
}
footer {
   text-align: center;
   background-color: #1e1e1e;
}
a:link, a:visited {
  background-color: #1e1e1e;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #000000;
}

</style>
</head>
<body>
<header>
<div style="background-color:#191970;padding:15px;text-align:center;">
  <h1>PEMPROGRAMAN WEB</h1>
</div>
<ul class="menuatas" id="myTopnav">
  <li> <a class="active" href="kontak.php"> Kontak </a></li>
  <li> <a href="index1.php"> Home </a></li>
  <li> <a href="login.php"> Daftar </a></li>
  <li> <a href="presensi.php"> Presensi </a></li>
  <li> <a href="index.php"> Logout </a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction

()">☰</a>
  </li>
</ul>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "menuatas") {
        x.className += " responsive";
    } else {
        x.className = "menuatas";
    }
}
</script>

</header>

<article>
<div class="container">
  <h3>Contact Form</h3> <br> 

  <form action="/action_page.php">
    <label for="fname">Nama Depan</label>
    <input type="text" id="fname" name="firstname" placeholder="Nama Depan Anda...">

    <label for="lname">Nama Belakang</label>
    <input type="text" id="lname" name="lastname" placeholder="Nama Belakang Anda...">

    </select>

    <label for="subject">Pesan</label>
    <textarea id="subject" name="subject" placeholder="Tulis Pesan Anda..." style="height:200px"></textarea>

<div class="Kirim">
 <a href="kontak2.php" target="_blank">Kirim</a></div>
  </form>
</div>
</article>

<footer class=" text-center ">
     <p style="color:#FFFFFF"> Created By Kaisar <i class="bi bi-whatsapp text-light"></i> <a href="https://api.whatsapp.com/send?phone=+6285559607606" class="text-white fw-bold"> ALFAN LUTHFI BACHTIAR</a>
</p></footer>

</body>
</html>
