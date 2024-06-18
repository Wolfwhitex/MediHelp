@extends('layout.master')


<style>
    body {
        background-color: #ffffff;
    }
    
    .appointment-btn a {
        background-color: #66bb6a;
        border-color: #66bb6a;
        color: white !important;
    }
    #appointment {
        background-color: #ffffff;
        padding: 50px 0;
    }
    .section-title h2 {
        color: #4caf50;
    }
    .table {
        margin: 20px auto;
        width: 80%;
        background-color: #ffffff;
    }
    .table th, .table td {
        padding: 15px;
        text-align: left;
    }
    .btn_upload input {
        background-color: #66bb6a;
        border: none;
        color: white;
        padding: 10px;
    }
    .btn_upload input[type="file"] {
        display: none;
    }
    .btn_upload label {
        cursor: pointer;
    }
    .btn-outline-success {
        color: #66bb6a;
        border-color: #66bb6a;
    }
    .btn-outline-success:hover {
        background-color: #66bb6a;
        color: white;
    }
</style>

<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand"><i></i>MediHelp</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/home') }}" class="smoothScroll">Home</a></li>
                <li><a href="{{ url('/saranobat') }}" class="smoothScroll">Saran Obat</a></li>
                <li><a href="{{ url('/apotek') }}" class="smoothScroll">Apotek</a></li>
                <li><a href="{{ url('/konsultasi') }}" class="smoothScroll">Konsultasi</a></li>
                <li><a href="{{ url('/transaksi') }}" class="smoothScroll">Pesan</a></li>
                <li class="appointment-btn"><a href="{{url('logout')}}" class="btn btn-outline-success" type="submit">Logout</a></li>
            </ul>
        </div>
    </div>
</section>

<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="images/appointment-image.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                    <h2>Isi data dibawah ini</h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.8s">
                    <div class="col">
                        <p>Sudah Periksa? Upload Resep disini</p>
                        <div class="panel">
                            <div class="button_outer">
                                <div class="btn_upload">
                                    <label for="upload_file" class="btn">Upload Resep</label>
                                    <input type="file" id="upload_file" name="file_resep">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <form action="{{url('search')}}" method="get">
                            <input type="search" name="search" placeholder="keluhan" class="form-control" style="margin-bottom: 10px;">
                            <input type="submit" value="Submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <h3 class="text-center">Obat yang disarankan</h3>
    <br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Diagnosa</th>
                <th>Saran Obat</th>
                <th>Keterangan Obat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($obat as $item)
            <tr>
                <td>{{$item->Nama_Penyakit}}</td>
                <td>{{$item->Nama_Obat}}</td>
                <td>{{$item->Penggunaan_Obat}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@section('content')
@endsection
