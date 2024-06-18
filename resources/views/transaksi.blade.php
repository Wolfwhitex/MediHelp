@extends('layout.master')

<head>
    <title>Transaksi</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f0f8f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        } */
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #4caf50;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #4caf50;
        }
        select, input[type="number"], input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
        .form-group p {
            margin: 0;
            padding: 10px;
            background-color: #d4edda;
            border-radius: 5px;
            text-align: center;
            color: #155724;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
        .message {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
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
    
</section>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <div class="container">
        <h1>Transaksi</h1>

        @if (session('success'))
            <div class="message success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="message error">{{ session('error') }}</div>
        @endif

        <form action="{{ route('transaction.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ObatapotekID">Obat</label>
                <select name="ObatapotekID" id="ObatapotekID" required>
                    <option value="">Pilih Obat</option>
                    @foreach ($obatapotek as $obat)
                        <option value="{{ $obat->obatapotekid }}" data-harga="{{ $obat->Hargaobat }}">{{ $obat->Namaobat }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Hargaobat">Harga Obat</label>
                <input type="text" id="Hargaobat" readonly>
            </div>

            <div class="form-group">
                <label for="Jumlah_obat">Jumlah Obat</label>
                <input type="number" name="Jumlah_obat" id="Jumlah_obat" required>
            </div>

            <div class="form-group">
                <p>Total harga: <span id="TotalHarga">0</span></p>
            </div>

            <div class="form-group">
                <button type="submit">Pesan</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('ObatapotekID').addEventListener('change', function () {
            var selectedOption = this.options[this.selectedIndex];
            var harga = selectedOption.getAttribute('data-harga');
            document.getElementById('Hargaobat').value = harga;
            hitungTotalHarga();
        });

        document.getElementById('Jumlah_obat').addEventListener('input', function () {
            hitungTotalHarga();
        });

        function hitungTotalHarga() {
            var jumlah = document.getElementById('Jumlah_obat').value;
            var harga = document.getElementById('Hargaobat').value;
            var total = jumlah * harga;
            document.getElementById('TotalHarga').textContent = total;
        }
    </script>
    @section('content')
</body>

@endsection