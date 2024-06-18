@extends('layout.master')

<!DOCTYPE html>
<html lang="en">
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

     <!-- HOME -->
     <section id="home"data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h1>Healthy Living</h1>
                                             <a href="{{ url('/saranobat') }}" class="section-btn btn btn-default">Saran Obat</a>
                                        </div>
                                   </div>
                              </div>  
                         </div>
               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Selamat datang di <i></i>MediHelp</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>MediHelp adalah apotek online inovatif yang memudahkan Anda mendapatkan obat yang tepat dengan cepat dan mudah.</p>
                                   <p>Nikmati kemudahan dan kenyamanan layanan kesehatan dengan MediHelp, apotek digital yang selalu siap membantu Anda kapan saja, di mana saja.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <!-- <img src="images/author-image.jpg" class="img-responsive" alt=""> -->
                                   <!-- <figcaption>
                                        <h3>Dr. Neil Jackson</h3>
                                        <p>General Principal</p>
                                   </figcaption> -->
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Team</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">

                                   <div class="team-info">
                                        <h3>Ady Nugroho</h3>
                                        <p>Developer</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">ady.nugroho@binus.ac.id</a></p>
                                        </div>
                                   </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">

                                   <div class="team-info">
                                        <h3>Nazhira Dewi Aqmarina</h3>
                                        <p>Developer</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">nazhira.aqmarina@binus.ac.id</a></p>
                                        </div>
                                   </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">

                                   <div class="team-info">
                                        <h3>Regina Patricia Hartawan</h3>
                                        <p>Developer</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">regina.hartawan@binus.ac.id</a></p>
                                        </div>
                                   </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">

                                   <div class="team-info">
                                        <h3>Stephen Wijaya Utama</h3>
                                        <p>Developer</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">stephen.utama001@binus.ac.id</a></p>
                                        </div>
                                   </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     {{-- <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>     -->       --}}
@section('content')
</body>
</html>
@endsection