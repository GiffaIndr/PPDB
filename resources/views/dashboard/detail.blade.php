@extends('layout.dash')

@push('stylesheet')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')

<section class="section">
    <div class="section-header">
        @foreach ($takes as $take)
                    
                @endforeach
      <h1>{{ ucfirst(auth()->user()->role) }}</h1>
    </div>
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card shadow p-3">
        <div class="card-body p-0">
            <div class="text-center" style="text-decoration: none; list-style:none; font-size:16px;">
                <li>Email: {{$take->email}} <li>
                    <li>Nama: {{ $take->nama }}</li>
                    <li>NISN: {{ $take->password }}</li>
                <li>Jenis Kelamin: {{ $take->jeniskelamin}}</li>
                <li>Sekolah: {{ $take->sekolah }}</li>
                <li>Nobor Telepon: {{ $take->nomor }}</li>
                <li>Nomber Ibu: {{ $take->noibu }}</li>
                <li>Nomber Ayah: {{ $take->noayah }}</li>
                <br>
                <a href="{{route('dashboard')}}" class="btn btn-primary" style="text-decoration: none; margin-bottom:10px;">Kembali</a>
            </div>
        </div>
    </div>
</section>



@endsection

@push('javascript')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
@endpush