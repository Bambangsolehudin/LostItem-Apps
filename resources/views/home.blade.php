@extends('layouts.app')

@section('content')
<div class="container">
    <marquee>Selamat Datang di Aplikasi lostItem-Apps || membantu dalam mencari dan menemukan barang</marquee>
    <br>
    <br>
    <?php 
    $tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    echo " | Pukul : <b> " . $jam . " " ." </b> ";
    $a = date ("H");
    if (($a>=6) && ($a<=11)) {
        echo " <b>, Selamat Pagi !! </b>";
    }else if(($a>=11) && ($a<=15)){
        echo " , Selamat  Pagi !! ";
    }elseif(($a>15) && ($a<=18)){
        echo ", Selamat Siang !!";
    }else{
        echo ", <b> Selamat Malam </b>";
    }
    ?>
    <div class="row justify-content-center mt-4">

        <div class="col-md-4">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                {{-- <div class="card-header">Header</div> --}}
                <div class="card-body text-secondary">
                  <a href="{{ url('my-profile') }}"><h5 class="card-title">My Profile</h5></a>
                  <p class="card-text"><hr></p>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                {{-- <div class="card-header">Header</div> --}}
                <div class="card-body text-secondary" >
                  <a href="{{ url('item') }}"><h5 class="card-title">Items</h5></a>
                  <p class="card-text">total : {{ $item }}</p>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                {{-- <div class="card-header">Header</div> --}}
                <div class="card-body text-secondary">
                  <a href="{{ url('image') }}"><h5 class="card-title">Items-Image</h5></a>
                  <p class="card-text">total : {{ $image }}</p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
