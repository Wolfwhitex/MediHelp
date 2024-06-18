@extends('layout.master')
<head>
    <style>
        /* Gaya CSS untuk header */
        
        h1 {
            background-color: #a5c422;
            /* Warna hijau */
            text-align: center;
            /* Mengatur teks di tengah */
            font-family: Arial, sans-serif;
            /* Mengatur jenis font */
            color: white;
            padding: 20px;
        }
        /* Gaya CSS untuk daftar menu */
        
        .menu-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            flex-wrap: wrap;
            /* Menambahkan baris baru jika tidak muat di baris sebelumnya */
        }
        
        .menu-item {
            width: 200px;
            margin: 10px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* Efek bayangan untuk efek hover */
        }
        
        .menu-item:hover {
            background-color: #e0e0e0;
            transform: translateY(-5px);
            /* Efek sedikit mengangkat saat dihover */
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            /* Bayangan lebih besar saat dihover */
        }
        
        .menu-item h2 {
            margin-bottom: 10px;
        }
        
        .menu-item img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }
        
        .menu-item p {
            font-size: 14px;
            color: #333;
        }
    </style>
</head>

<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
             <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon icon-bar"></span>
                  <span class="icon icon-bar"></span>
                  <span class="icon icon-bar"></span>
             </button>

             <!-- lOGO TEXT HERE -->
             <a href="index.html" class="navbar-brand"><i></i>MediHelp</a>
        </div>

        <!-- MENU LINKS -->
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
   <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
</section>

    <h1>Apotek Terdekat</h1>
    <div class="menu-container">
        <div class="menu-item">
            <h2>Apotek Sehat</h2>
            <p>Jl. Imam Bonjol</p>
            <a href="{{ url('/obatapotek') }}">Lihat Obat Tersedia</a>
        </div>

        <div class="menu-item">
            <h2>Apotek Jaya</h2>
            <p>Jl. Ijen</p>
            <a href="{{ url('/obatapotek') }}">Lihat Obat Tersedia</a>
        </div>

        <div class="menu-item">
            <h2>Apotek Cahaya</h2>
            <p>Jl. Ijen</p>
            <a href="{{ url('/obatapotek') }}">Lihat Obat Tersedia</a>
        </div>

        <div class="menu-item">
            <h2>Apotek Wahyu</h2>
            <p>Jl. Ijen</p>
            <a href="{{ url('/obatapotek') }}">Lihat Obat Tersedia</a>
        </div>

    </div>
    @section('content')
</body>
@endsection