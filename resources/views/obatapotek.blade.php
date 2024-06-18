@extends('layout.master')

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
        <div class="row">
            <div class="col-4">
                     <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                          <h2>Obat yang tersedia</h2>
                     </div>
                     <div class="col-4" style="background: rgb(143, 247, 143)">
                         <table>
                              <tr>
                                <th>Nama Obat</th>
                                <th>Harga</th>
                                <th>qty</th>
                              </tr>
                              @foreach ($obatapotek as $item)
                              <tr>
                                <td>{{$item->Namaobat}}</td>
                                <td>{{$item->Hargaobat}}</td>
                                <td>{{$item->Stokobat}}</td>
                              </tr>
                              @endforeach
                            </table>
                            

                     </div>
            </div>
        </div>
    </div>
</body>