@extends('layout.layout')
@section('content')

<style>
    .font{
    color: rgb(255, 255, 255);
    }
    .card-text{
        color: black;
    }
    </style>
<section class="home" id="beranda" style=" background-image: url('{{asset('assets/img/bgedited.jpg')}}');">
    <div class="home-text" >
    
        <h1>PPDB TP 2023-2024<br>SMK <span>Wikrama</span> Bogor</h1>
        <p>Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <b>DAFTAR</b> dibawah ini!<br> Ilmu yang <span>Amaliah</span>, Amal yang <span>Ilmiah</span>, Akhlakul <span>Karimah</span>.</p>
        <a href="/pendaftaran" class="btncss">Daftar</a>
    <br>

    </div>
</section>
<section>
    <div class="row">
        <div class="col-sm-4 text-center">
          <div class="card shadow border-none" >
            <div class="card-body">
              <h5 class="card-title"><b>MOTTO</b></h5><hr>
              <p class="card-text">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
        
            </div>
          </div>
        </div>
        <div class="col-sm-4 text-center">
          <div class="card shadow border-none" >
            <div class="card-body">
              <h5 class="card-title"><b>AFIRMASI</b></h5><hr>
              <p class="card-text">adamu negeri - kami berjanji - lulus Wikrama - siap membangun negeri</p>
        
            </div>
          </div>
        </div>
        <div class="col-sm-4 text-center">
            <div class="card shadow border-none" >
              <div class="card-body">
                <h5 class="card-title"><b>ATITUDE</b></h5><hr>
                <p class="card-text">Aku ada lingkungan<br> bahagia</p>
        
              </div>
            </div>
          </div>
      </div>
</section>


<section id="jurusan">
    <h3>Jurusan</h3>
    <hr>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('assets/img/rpl.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="font">Pengembangan Perangkat Lunak dan Gim</h5>
              <p class="font">Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/dkv.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="font">Desain Komunikasi Visual</h5>
              <p class="font">Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/pmn.jpeg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="font">Pemasaran</h5>
              <p class="font">Some representative placeholder content for the third slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/tjkt2.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="font">Teknik Jaringan Komputer dan Telekomunikasi</h5>
              <p class="font">Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        </div>
      </div>
</section>

<section id="testimoni">
  <h3>Testimoni</h3>
    <hr>
  <label class="form-label" for="customRange1"></label>  
  <div class="d-flex">
    <div class="p-2 w-100"><p style="color: black"><b>Gipin</b><br>Sekolah yang bagus</p></div>
    <div class="p-2 flex-shrink-1" style="margin-right: 250px;"><p style="color: black"><b>finddrawan</b><br>bagus banget ada komputernya..</p></div>
  </div>

  <div class="range">
    <input type="range" class="form-range" style="" id="customRange1" />
  </div>
  <div class="d-flex">
    <div class="p-2 w-100" style="margin-left: 250;"><p style="color: black"><b>hartino valentine</b><br>keren, aku masuk pplg bisa liat huruf warna warni!!</p></div>
    <div class="p-2 flex-shrink-1" style="margin-right: 150px;"><p style="color: black"><b>opake patulo</b><br>bagus, pengiriman sangat cepat</p></div>
  </div>
</section>
<section id="kontak">
  
</section>

<footer>
  <div class="content">
    <div class="left box">
      <div class="upper">
        <div class="topic">Tentang</div>
        <p> 	
          SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa.</p>
      </div>
      <div class="lower">
        <div class="topic">Hubungi Kami</div>
        <div class="phone">
          <a href="#"><i class="fas fa-phone-volume"></i>0251-8242411 / 082221718035</a>
        </div>
        <div class="email">
          <a href="#"><i class="fas fa-envelope"></i>prohumasi@smkwikrama.net</a>
        </div>
      </div>
    </div>
    <div class="middle box">
      <div class="topic">Tautan</div>
      <div><a href="#beranda">Beranda</a></div>
      <div><a href="#jurusan">Jurusan</a></div>
      <div><a href="#tentang">Tentang Kami</a></div>
      <div><a href="#testimoni">Testimoni</a></div>
      <div><a href="#hubungi">Hubungi Kami</a></div>
    </div>
    <div class="right box">
      <div class="topic">Sosial Media</div>
      
        <div class="media-icons">
          <a href="https://www.instagram.com/smkwikrama/"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/company/smk-wikrama-bogor/"><i class="fab fa-linkedin-in"></i></a>
        </div>
      
    </div>
  </div>
  <div class="bottom">
    <p>Copyright © 2020 All rights reserved</p>
  </div>
</footer>
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>

@endsection