<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- boostrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
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
  background-color: #c0c0c0;
}

section {

  background-color: #c0c0c0;

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
footer {
   text-align: center;
   background-color: #1e1e1e;
}



    </style>
</head>
<body>
	<header>
  <div style="background-color:#191970;padding:15px;text-align:center;">
  <h1>PEMPROGRAMAN WEB</h1>
</div>
 <ul class="menuatas" id="myTopnav">
  <li> <a class="active" href="login.php"> Daftar </a></li>
  <li> <a href="index1.php"> Home </a></li>
  <li> <a href="kontak.php"> Kontak </a></li>
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
	<section>
    <article>
  <form action="prosesdaftar.php" method="POST">
    <h1>FORM PENDAFTARAN</h1>
    <label>NIS</label><br>
    <input type="text" name="nis_input"><br>

    <label> Nama Depan </label><br>
    <input type="text" name="namadepan_input"> <br> 

    <label> Nama Belakang </label><br>
    <input type="text" name="namabelakang_input"> <br> <br>

    <label >Tempat Lahir </label>
     <select name="tempatlahir_input">
       <option value="kabmadiun"> Kab Madiun </option>
       <option value="kabponorogo"> Kab Ponorogo </option>
       <option value="kabngawi"> Kab Ngawi </option>
       <option value="kabmagetan"> Kab Magetan </option>
     </select> <br> <br>

    <label> Tanggal Lahir </label>
    <input type="date" name="tanggallahir_input"> <br> <br>

    <label> Jenis Kelamin </label>
    <input type="radio"  name="kelamin_input" value="Laki-Laki">

    <label>Laki-Laki</label>
    <input type="radio"  name="kelamin_input" value="Perempuan">
    <label>Perempuan</label><br> <br>

    <label> Hobby </label> 
    <input type="checkbox" name="hobby_input[]" value="Membaca">
    <label> Membaca </label>
    <input type="checkbox" name="hobby_input[]" value="Olahraga">
    <label> Olahraga </label>
    <input type="checkbox" name="hobby_input[]" value="Traveling">
    <label> Traveling </label><br> <br>

    <label> Alamat </label> <br>
    <input type="textarea" rows="3" name="alamat_input"> <br> <br>

    <input type="submit">
    
</article>
 </form>
     </section>

    
     <footer class=" text-center ">
     <p style="color:#FFFFFF"> Created By Kaisar <i class="bi bi-whatsapp text-light"></i> <a href="https://api.whatsapp.com/send?phone=+6285559607606" class="text-white fw-bold"> ALFAN LUTHFI BACHTIAR</a>
</p></footer>




</body>
</html>