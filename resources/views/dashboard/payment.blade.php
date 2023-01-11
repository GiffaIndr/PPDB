@extends('layout.dash')
@section('content')

<div class="container w-50" style="padding: 5%">
  @if(Session::get('waitPay'))
  <div class="alert alert-success">
  {{Session::get('waitPay')}}</div>
  @endif
  @if(Session::get('tolak'))
  <div class="alert alert-danger">
  {{Session::get('tolak')}}</div>
  @endif

  @if($errors->any())
  <span class="text-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
    </ul>
  </span>
  @endif
  
  <p>Hi!! {{Auth::user()->nama}}</p>

  @if(is_null (Auth::user()->take))
 
<div class="card p-2">
  <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <p class="text-center"><b>Form Pembayaran</b></p>
    <hr>

    <div class="form-row row d-flex ">
      <div class="form-group col-6" style="margin-right:50px;">
        <label for="inputEmail4">Method pembayaran</label>
          <select type="search" name="bank" class="text-box" placeholder="bank" required>
     <option hidden disable selected>Pilih Pembayaran</option>
     @foreach($takes as $take) 
     <option>{{$take['name']}}</option>
     @endforeach
  </select>
      </div>
      <div class="form-group col-5">
        <label for="inputPassword4">Nama Pemilik Rekening</label>
        <input type="text" name="pemilik" class="form-control" id="inputPassword4" placeholder="nama">
      </div>
    </div>
    <div class="form-row d-flex">
    <div class="form-group col-12 pt-2">
      <label for="inputEmail4">Nominal</label>
      <input type="number" name="nominal" id="nominal" class="form-control" placeholder="nominal">
    </div> 
    </div>
    <div class="form-group">
      <div class="form-group pt-3">
      <label for="inputEmail4">Foto Bukti</label>
      <input type="file" name="bukti" class="form-control" id="inputEmail4" placeholder="Uploaf">
    </div>
    </div>
    <br>
    <input type="submit" name="submit" class="  btn btn-warning"></input>
    <br>
  </div>
</div>
</form>
</div>
</div>

@elseif(Auth::user()->take->status == 'tolak')
<div class="card p-2">
  <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <p class="text-center"><b>Form Pembayaran</b></p>
    <hr>

    <div class="form-row row d-flex ">
      <div class="form-group col-6" style="margin-right:50px;">
        <label for="inputEmail4">Method pembayaran</label>
          <select type="search" name="bank" class="text-box" placeholder="bank" required>
     <option hidden disable selected>Pilih Pembayaran</option>
     @foreach($takes as $take) 
     <option>{{$take['name']}}</option>
     @endforeach
  </select>
      </div>
      <div class="form-group col-5">
        <label for="inputPassword4">Nama Pemilik Rekening</label>
        <input type="text" name="pemilik" class="form-control" id="inputPassword4" placeholder="nama">
      </div>
    </div>
    <div class="form-row d-flex">
    <div class="form-group col-12 pt-2">
      <label for="inputEmail4">Nominal</label>
      <input type="number" name="nominal" id="nominal" class="form-control" placeholder="nominal">
    </div> 
    </div>
    <div class="form-group">
      <div class="form-group pt-3">
      <label for="inputEmail4">Foto Bukti</label>
      <input type="file" name="bukti" class="form-control" id="inputEmail4" placeholder="Uploaf">
    </div>
    </div>
    <br>
    <input type="submit" name="submit" class="  btn btn-warning"></input>
    <br>
  </div>
</div>
</form>
</div>
</div>
@elseif(Auth::user()->take->status == 'validasi')
<div class="alert alert-success"><p>Pembayaran anda telah di verifikasi!!</p></div>
@else
<div class="alert alert-warning"><p>Pembayaran sedang di verifikasi</p></div>
@endif
<script>
  $("#nominal").on({
    keyup: function () {
        formatCurrency($(this));
    },
    blur: function () {
        formatCurrency($(this), "blur");
    },
});

function formatNumber(n) {
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function formatCurrency(input, blur) {
    var input_val = input.val();

    if (input_val === "") {
        return;
    }

    var original_len = input_val.length;

    var caret_pos = input.prop("selectionStart");

    if (input_val.indexOf(".") >= 0) {
        var decimal_pos = input_val.indexOf(".");

        var left_side = input_val.substring(0, decimal_pos);
        var right_side = input_val.substring(decimal_pos);

        left_side = formatNumber(left_side);

        right_side = formatNumber(right_side);

        if (blur === "blur") {
            right_side += "00";
        }

        right_side = right_side.substring(0, 2);

        input_val = "Rp " + left_side + "." + right_side;
    } else {
        input_val = formatNumber(input_val);
        input_val = "Rp " + input_val;

        if (blur === "blur") {
            input_val += ".00";
        }
    }

    input.val(input_val);

    var updated_len = input_val.length;
    caret_pos = updated_len - original_len + caret_pos;
    input[0].setSelectionRange(caret_pos, caret_pos);
}
</script>

@endsection