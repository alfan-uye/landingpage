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

  background-color: #E0FFFF;

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
  <li> <a class="active" href="index1.php"> Home </a></li>
  <li> <a href="login.php"> Daftar </a></li>
  <li> <a href="kontak.php"> Kontak </a></li>
  <li> <a href="presensi.php"> Presensi </a></li>
  <li> <a href="index.php"> Logout </a></li>
  <li> <a href="https://alfan-uye.github.io/bootstrap/"> PROFIL </a></li>
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
        <img src="aa.jpg" style="display:block; margin:auto; padding: 8px;">
        <p> PENGERTIAN PEMROGRAMAN WEB
Pemrograman web diambil dari 2 suku kata yaitu pemrograman dan web. Pemrograman yang dalam bahasa English adalah programming dan diartikan proses, cara, perbuatan program.

Definisi Web : jaringan komputer yang terdiri dari kumpulan situs internet yang menawarkan teks dan grafik dan suara dan sumber daya animasi melalui protokol transfer hypertext.

Orang banyak mengenal web dengan istilah WWW (world wide web), World Wide Web adalah layanan internet yang paling populer saat ini internet mulai dikenal dan digunakan secara luas setelah adanya layanan WWW . WWW adalah halaman-halaman website yang dapat saling terkoneksi satu dengan lainnya (hyperlink) yang membentuk samudra belantara informasi . WWW berjalan dengan protokol HyperText Transfer Protokol (HTTP). Halaman Web merupakan file teks murni (plain text) yang berisi sintaks-sintaks HTML yang dapat dibuka/ dilihat/ diterjemahkan dengan Internet Browser . Sintaks HTML mampu memuat konten text, gambar, audio, video dan animasi. Kini internet identik dengan web, karena kepopuleran web sebagai standar interface pada lanyanan-layanan yang ada di internet, dari awalnya sebagai penyedia informasi, ini digunakan juga untuk komunikasi dari email sampai dengan chatting, sampai dengan melakukan transaksi binsin (commerce) (Betha Sidik,Ir, Pemrograman web dengan HTML, Informatika Bandung, 2005) Banyak keuntungan yang diberikan oleh Aplikasi berbasis Web dari pada aplikasi berbasis destop, sehingga aplikasi berbasis web telah diadopsi oleh perusahaan sebagai bagian dari strategi teknologi informasinya, karena beberapa alasan :
Akses informasi mudah,
Baris isi
Setup server lebih mudah
Baris isi
Informasi mudah didistribusikan
Baris isi
Bebas platform, informasi dapat di sajikan oleh browser web pada sistem operasi mana saja karena adanya standar dokumen berbagai tipe data dapat disajikan
Baris isi
HTTP
HTTP (HyperTextTransfer Protocol) adalah protokol yang dipergunakan untuk mentransfer dokumen dalam World Wide Web(WWW). Protokol ini adalah protokol ringan, tidak berstatus dan generik yang dapat dipergunakan berbagai macam tipe dokumen. Pengembangan HTTP dikoordinasi oleh Konsorsium World Wide Web(W3C) dan grup bekerja Internet Engineering Task Force(IETF), bekerja dalam publikasi satu seri RFC, yang paling terkenal RFC 2616, yang menjelaskan HTTP/1,1, versti HTTP yang digunakan umum sekarang ini. HTTP adalah sebuah protokol meminta/menjawab antara clientdan server. Sebuh client HTTP seperti web browser, biasanya memulai permintaan dengan membuat hubungan TCP/IPke porttertentu di tuan rumah yang jauh (biasanya port 80). Sebuah server HTTP yang mendengarkan diport tersebut menunggu client mengirim kode permintaan (request), seperti “GET / HTTP/1.1” (yang akan meminta halaman yang sudah ditentukan), diikuti dengan pesan MIMEyang memiliki beberapa informasi kode kepala yang menjelaskan aspek dari permintaan tersebut, diikut dengan badan dari data tertentu. Beberapa kepala (header) juga bebas ditulis atau tidak, sementara lainnya (seperti tuan rumah) diperlukan oleh protokol HTTP/1,1. Begitu menerima kode permintaan (dan pesan, bila ada), server mengirim kembali kode jawaban, seperti “200 OK”, dan sebuah pesan yang diminta, atau sebuah pesan error atau pesan lainnya.
Sejarah Protokol HTTP pertama kali dipergunakan dalam WWW pada tahun 1990. Pada saat tersebut yang dipakai adalah protokol HTTP versi 0.9. Versi 0.9 ini adalah protokol transfer dokumen secara mentah, maksudnya adalah data dokumen dikirim sesuai dengan isi dari dokumen tersebut tanpa memandang tipe dari dokumen. Kemudian pada tahun 1996 protokol HTTP diperbaiki menjadi HTTP versi 1.0. Perubahan ini untuk mengakomodasi tipe-tipe dokumen yang hendak dikirim beserta enkoding yang dipergunakan dalam pengiriman data dokumen. Sesuai dengan perkembangan infrastruktur internet maka pada tahun 1999 dikeluarkan HTTP versi 1.1 untuk mengakomodasi proxy, cache dan koneksi yang persisten. </p> <br>


   <div  class="Submit" style="text-align: center;">
  <a href="https://www.w3schools.com/html/" target="_blank">HTML</a>
  <a href="https://www.w3schools.com/css/" target="_blank">CSS</a> 
  <a href="https://www.w3schools.com/js/" target="_blank">JAVASCRIPT</a> <br><br>
  <a href="https://www.w3schools.com/sql/" target="_blank">SQL</a> 
  <a href="https://www.w3schools.com/python/" target="_blank">PYTHON</a>
  <a href="https://www.w3schools.com/php/" target="_blank">PHP</a> <br> <br>
  <a href="https://www.w3schools.com/java/" target="_blank">JAVA</a>
  <a href="https://www.w3schools.com/cpp/" target="_blank">C++</a> 


  <br> <br>

    </div>
    </article>



    <footer class=" text-center ">
     <p style="color:#FFFFFF"> Created By Kaisar <i class="bi bi-whatsapp text-light"></i> <a href="https://api.whatsapp.com/send?phone=+6285559607606" class="text-white fw-bold"> ALFAN LUTHFI BACHTIAR</a>
</p></footer>


</body>
</html>