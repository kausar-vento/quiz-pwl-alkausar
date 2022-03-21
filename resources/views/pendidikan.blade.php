@extends('layouts.navbar')

@section('navbar-alka')
<div id="loading"></div>
<div class="box">
    <div class="gambar" id="image">
        <img id="sliderImage1" src="images/foto1.png" style="width: 40%" alt="">
        <img id="sliderImage2" src="images/foto2.png" style="width: 40%" alt="">
    </div>
    <div>
        <center><b>
                <p class="jd2">{{ $tittle }}</p>
            </b></center>
    </div>
    <div class="form">
        <form action="" method="GET">
            <tr>
                <td>Sekolah Dasar</td>
                <td><input type="text" class="text1" value="{{ $text11 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td>Sekolah Menengah Pertama</td>
                <td><input type="text" class="text22" value="{{ $text22 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td>Sekolah Menengah Akhir</td>
                <td><input type="text" class="text33" value="{{ $text33 }}" disabled></td> <br>
            </tr>
            <br>
            <tr>
                <td><a href="/data_diri_alka"><input type="button" class="sbt3" value="Kembali Ke Menu Awal"></td></a>
            </tr>
        </form>
    </div>
</div>
<script src="js_biodata/jquery-3.6.0.js"></script>
<script src="js_biodata/animasi.js"></script>
<script>
    var loading = document.getElementById('loading');

    window.addEventListener('load', function () {
        loading.style.display = "none";
    });

</script>
@endsection
