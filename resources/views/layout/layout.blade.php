
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('assets/css/landing.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/stylist.css')}}" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <script src="{{asset('assets/js/index.js')}}"></script> 
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
</head>
<style>
  a:hover{
   color: rgb(126, 77, 41) !important;
 }
</style>
<body>
    <div class="jeda">
   <header>
    
    <a   href="/" class="logo">SMK <span>Wikrama</span></a>
    <div class="bx-menu"  id="menu-icon"></div>

    <ul class="navlist">
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#jurusan">Jurusan</a></li>
        <li><a href="#tentang">Tentang Kami</a></li>
        <li><a href="#testimoni">Testimoni</a></li>
        <li><a href="#hubungi">Hubungi Kami</a></li>
        <li><a href="/login">Login</a></li>

    </ul>
</header> 
    </div>
                
    
    @yield('content')
</body>

</html>
