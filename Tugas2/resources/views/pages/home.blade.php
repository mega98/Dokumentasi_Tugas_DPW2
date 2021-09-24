@extends('layout.frontend.master')
@section('content')

<!-- Bagian ABOUT -->
<section class="about" id="about">
    <div class="row">
        <div class="col150">
            <h2 class="tittleText">TENTANG<span>KAMI</span></h2>
            <p>BOBA GARDEN didirikan pada tahun 2021. Saat ini, BOBA GARDEN merupakan retail ( Marketplace ) online yang menyediakan aneka macam tanaman hias.
                Produk tanaman hias berasal dari budidaya tumbuhan yang ditanam dikebun kami yang tersebar di beberapa kota di Indonesia. Kami menawarkan aneka tanaman seperti tanaman hias, tanaman liar, dan benih tanaman!              
                Hal inilah yang membuat kami menjadi tujuan utama transaksi tanaman online di Indonesia. Lebih dari ribuan jenis tanaman, kami sangat ambisius dan akan terus berkembang. Kabar baiknya adalah, kami memberikan Anda banyak sekali pilihan untuk tetap menjadi konsumen dan penjual bunga.
                Kami adalah sarana penyedia bunga online yang diimbangi dengan teknologi terkini yang akan memberikan Anda pengalaman berbelanja bunga online yang tak tertandingi. 
                Mengapa berbelanja di tempat lain ketika BOBA GARDEN adalah toko Bunga online yang melayani segala kebutuhan Tanaman.
                Hubungi kami melalui Facebook, ikuti Instagram untuk informasi terbaru seputar perkembangan bunga online.</p>
        </div>

        <div class="col150">
            <div class="imgBx">
                <img src="pict/home.jpg" alt="">
            </div>
        </div>
    </div>
</section>


<!-- Bagian PRODUK KAMI -->
<section class="menu" id="menu">
    <div class="title">
    <h2 class="tittleText"><span>PRODUK</span>KAMI</h2>
    </div>

    <div class="content">
        <div class="box">
            <div class="imgBx">
                <a href="#"><img src="pict/bunga.gif" alt="">
            </div>
            <div class="text">
               <h3>Tanaman Hias Bunga</h3></a>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <a href="#"><img src="pict/daun.jpg" alt="">
            </div>
            <div class="text">
                <h3>Tanaman Hias Daun</h3></a>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <a href="#"><img src="pict/buah.jpg" alt="">
            </div>
            <div class="text">
                <h3>Tanaman Hias Buah</h3></a>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <a href="#"><img src="pict/akar.jpg" alt="">
            </div>
            <div class="text">
                <h3>Tanaman Hias Akar</h3></a>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <a href="#"><img src="pict/batang.jpg" alt="">
            </div>
            <div class="text">
                <h3>Tanaman Hias Batang</h3></a>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <a href="#"><img src="pict/gantung.jpg" alt="">
            </div>
            <div class="text">
                <h3>Tanaman Hias Gantung</h3></a>
            </div>
        </div>
        <div class="tittle">
            <a href="#" class="btn">TAMPILKAN SEMUA</a>
        </div>
    </div>
</section>


<!-- Bagian GARDEN -->
<section class="expert" id="expert">
    <div class="title">
    <h2 class="tittleText">DAFTAR<span>KEBUN</span></h2>
    </div>

    <div class="content">
        <div class="box">
            <div class="imgBx">
               <a href="#"><img src="pict/g2.jpg" alt=""></a>
            </div>
            <div class="text">
                <h3>METEOR GARDEN (Padang12)</h3>
            </div>
        </div>
       
        <div class="box">
            <div class="imgBx">
               <a href="#"><img src="pict/g3.jpg" alt=""></a>
            </div>
            <div class="text">
                <h3>TAMAN KOTA (Bikini Bottom)</h3>
            </div>
        </div>
        
        <div class="box">
            <div class="imgBx">
               <a href="#"><img src="pict/g4.jpg" alt=""></a>
            </div>
            <div class="text">
                <h3>HUTAN KOTA (Makam Pahlawan)</h3>
            </div>
        </div>
</section>


<!-- Bagian LOGIN DAN REGISTER -->
<section class="login" id="login">
    <div class="row">
        <div class="col150">
            <div class="tittleText1"><span>LOGIN</span> ATAU<span> REGISTER</span></div>
            <div class="contactForm">
                <h3>Login</h3>
              <div class="inputBox">
                  <input type="text" placeholder="Id">
              </div>
              <div class="inputBox">
                  <textarea placeholder="Pasword"></textarea>
              </div>
              <div class="inputBox">
                  <input type="submit" value="masuk">
              </div>
        </div>
    </div>

    <div class="rowo">
              <div class="contactForm">
                <h3>Register</h3>
              <div class="inputBox">
                  <input type="text" placeholder="Nama Depan">
              </div>
              <div class="inputBox">
                  <input type="text" placeholder="Nama Belakang">
              </div>
              <div class="inputBox">
                <input type="text" placeholder="Email">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Alamat">
            </div>
              <div class="inputBox">
                  <input type="text" placeholder=" No Telephone">
              </div>
              <div class="inputBox">
                  <textarea placeholder="Pasword"></textarea>
              </div>
              <div class="inputBox">
                  <input type="submit" value="masuk">
              </div>
    </div>
    
</section>
@stop