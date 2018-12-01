<?php

/* @var $this yii\web\View */
$this->title = 'Laboratorium';
?>
<div class="site-index">
    <div class="jumbotron">

        <br>
       <h2><marquee> Welcome to Laboratorium Pasundan 8 Bandung</marquee> </h2>

      </br>


<div class="w3-content" style="max-width:800px;position:relative">

<div class="w3-display-container mySlides">
  <img src="img/bukit.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
    Bukit Lawang, Bahorok
  </div>
</div>



<div class="w3-display-container mySlides">
   <img src="img/hah.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-container w3-padding-16 w3-black">
    Bukit Lawang, Bahorok
  </div>
</div>

<div class="w3-display-container mySlides">
   <img src="img/jo,bo.jpg" style="width:100%">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Dodol Raksasa , Tanjung Pura
  </div>
</div>
<div class="w3-display-container mySlides">
  <img src="img/kapal.jpg" style="width:100%">
 <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Kapal aspal Pertamina, Pangkalan susu
  </div>
</div>
        

    </div>
<br>
      <p class="lead">Aplikasi Laboratorium</p>

  </br>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                
                <h2>Laboratorium</h2>

                <p align="justify">Laboratorium yang ada pada sekolah ini memiliki fasilitas yang lengkap serta sarana yang mendukung kegiatan belajar mengajar yang dapat dimudahkan dengan sistem informasi yang dapat mengelola peminjaman alat serta bahan yang digunakan pada saat melakukan praktikum.</p>

            </div>
            <div class="col-lg-4">
                <h2>Alat</h2>

                <p align="justify">Alat - alat yang ada pada laboratorium adalah alat yang berstandar internasional sehingga dapat menyesuaikan keadaan teknologi ilmiah yang sekarang mulai berkembang pesat sehingga siswa dapat menyesuaikan perkembangan jaman ketika melakukan sebuah praktikum di laboratorium.</p>

            </div>
            <div class="col-lg-4">
                <h2>Bahan</h2>

                <p align="justify">Bahan - bahan yang digunakan pada saat praktikum selalu tersedia dengan lengkap dan kondisinya selalu baru agar siswa yang menggunakannya untuk praktikum dapat fokus dan mengerjakan praktikum yang ada dengan baik dan dengan standar yang bagus.</p>

            </div>
        </div>

    </div>
</div>




</div>
<script>
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
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>