@extends('layout.dash')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<style>
    a{
        text-decoration: none;
        
    color: grey;
    }

    ol, ul {
    padding-left: inherit;
}
.image{
  width: 100%;
  height: 170px;
  object-fit: cover;
 
}
.btn{
  transition: all 0.8s;
  color: white;
}
.btn:hover{
  background-color: white;
  color: black;
  box-shadow: 0 0 10px green;
}

.daftar{
  padding: 5px;
  width: 100%;
}
section{
  margin-top: 20px;
}
p{
  margin-top: 5px;
}
.fas{
  top: 0;
}
</style>

<div class="container mt-5" style="padding-left: 200px;">
  <img  class="image" src="{{asset('assets/img/bg_wikrama.jpg')}}" alt="">
  
<table  style="background-color: #D9E4FA; color: #000000; text-align:center;" class="table table-striped">
  
  <thead>
   
    <p class="mt-3"> <a class="fas fa-user"> Hi!!{{Auth::user()->nama}}</a></p>  
   
    <section>
    @if (session('addTake'))
    <div class="alert alert-success">
        {{ session('addTake') }}
    </div>
    @endif
    @if (session('done'))
    <div class="alert alert-success">
        {{ session('done') }}
    </div>
    @endif
    @if (session('tolak'))
    <div class="alert alert-danger">
        {{ session('tolak') }}
    </div>
    @endif
  </section>
    <hr>
    <tr>
      <th name="no" scope="col">No Registrasi</th>
      <th name="nama" scope="col">Nama</th>
      <th name="saksi" scope="col">bank</th>
      <th name="rayon" scope="col">nominal</th>
      <th name="keperluan" scope="col">bukti</th>
      <th name="keperluan" scope="col">detail</th>
      <th name="tanggal_pinjam" scope="col">Aksi</th>
    </tr>
  </thead>

  @foreach($takes as $take)

  <tbody>
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$take->pemilik}}</td>
      <td>{{$take->bank}}</td>
      <td>{{$take->nominal}}</td>
      <td><a href="{{route('bukti', $take->id)}}">Bukti</a></td>
      <td><a href="{{route('detail', $take->id)}}">detail</a></td>
        <div class="uc">
          <td>
            @if($take->status == 'validasi')
            <span class="w-100" style="color: green;">validasi</span>
            @elseif($take->status == 'tolak')
            <span class="w-100" style="color:red;">Tolak</span>
          </td>
          @else
      <form  action="{{ route('updateCompleted', $take->user_id) }}" method="post">
        @method('PATCH')
        @csrf
        <button type="submit" class="btn btn-success">verifikasi</button>
      </form>
      </div>
      </td>
      <td>
        <form action="{{route('updateRefuse', $take->user_id)}}" method="post">
          @method('PATCH')
          @csrf
      <button type="submit"  class="btn btn-danger">Tolak</button>
        </form>
      </td>
      @endif
    </tr>
   
  </tbody>
  @endforeach
</table>
</div>
@endsection
