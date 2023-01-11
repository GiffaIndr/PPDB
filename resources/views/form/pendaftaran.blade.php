<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/form.css')}}" rel="stylesheet" type="text/css">

    <title>Pendaftaran</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  
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
<div class="contact-form">
    <div class="card p-4 shadow mt-5 m-5 pl-5">
  <h2>Silahkan Isi Form Pendaftaran</h2><hr>
  <form class="daftar" action="{{route("login.input")}}" method="post">
    @if ($errors->any())
    <ul>
        @foreach($errors->all() as $error) <li> {{$error}}</li>
        @endforeach
    </ul>
    @endif
    @csrf
    <p>NISN</p>
     <input type="text" name="password" class="text-box" placeholder="nisn" required>
     <p>Jenis Kelamin</p>
     <select type="text" name="jeniskelamin" class="text-box" placeholder="Jenis Kelamin" required>
        <option hidden ></option>
     <option>Laki Laki</option>
     <option>Perempuan</option>
     </select>
     <p>Nama</p>
     <input type="text" name="nama" class="text-box" placeholder="nama" required>
     <p>Asal Sekolah</p>
     <select type="search" name="sekolah" class="text-box" placeholder="rayon" required>
     <option hidden disable selected>Pilih asal sekolah</option>
     @foreach($takes as $take) 
     <option>{{$take['nama_sekolah']}}</option>
     @endforeach
  </select>
     <p>Email</p>
     <input type="email" name="email" class="text-box" placeholder="email" required>
     <p>Nomor Handphone</p>
     <input type="number" name="nomor" class="text-box" placeholder="Nomor handphone" required>
     <p>Nomor HP Ayah</p>
     <input type="number" name="noayah" class="text-box" placeholder="No HP Ayah" required>
     <p>Nomor HP Ibu</p>
     <input type="number" name="noibu" class="text-box" placeholder="No HP Ibu" required>
  
   
     
     <input type="submit" name="submit" class="send-btn" value="send">
  </form>
    </div>