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
                    <li class="appointment-btn"><a href="#appointment">Login</a></li>
                  </ul>
             </div>
    
        </div>
        <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    </section>

     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <form id="appointment-form" role="form" method="post" action="#">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Isi data dibawah ini
                                   </h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Tulis Gejala Anda</label>
                                        <input type="text" class="form-control" id="gejala" name="gejala" placeholder="keluhan">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Sudah Berapa Lama?</label>
                                        <input type="email" class="form-control" id="durasi" name="durasi" placeholder="Hari/Jam">
                                   </div>

                                   <div class="col">
                                    Sudah Periksa? Upload Resep disini
                                    <div class="panel">
                                        <div class="button_outer">
                                            <div class="btn_upload">
                                                <input type="file" id="upload_file" name="">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
                                   </div>
                              </div>
                        </form>
                    </div>
               </div>
          </div> 
     </section>
     @section('content')
</body>
@endsection