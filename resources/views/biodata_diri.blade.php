@extends('layouts.navbar')

@section('navbar-alka')
<div id="loading"></div>
<div class="box">
    <div class="gambar" id="image">
        <img id="sliderImage1" src="images/foto1.png" class="img-fluid" style="width: 40%" alt="">
        <img id="sliderImage2" src="images/foto2.png" class="img-fluid" style="width: 40%" alt="">
    </div>
    <div>
        <b>
            <center><p class="jdl">{{ $tittle }}</p></center>
        </b>
    </div>
    <div class="form">
        <form action="" method="GET">
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Nama</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text1 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Umur</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text2 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Tempat Lahir</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text3 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Tanggal Lahir</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text4 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Cita - Cita</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text5 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend" >
                      <span class="input-group-text">Alamat</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text6 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Lokasi</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text7 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend">
                      <span class="input-group-text">No HP</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text8 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Pendidikan Terakhir</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text9 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <div class="input-group mb-3" style="width: 80%">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Agama</span>
                    </div>
                    <input type="text" class="form-control" placeholder="{{ $text10 }}">
                  </div>
            </tr>
            <br>
            <tr>
                <td><a href="/project_alka"><input type="button" class="btn-primary" value="Project"></td></a>
                <td><a href="/pendidikan_alka"><input type="button" class=" btn-primary" value="Pendidikan"></td></a>
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
