@extends('layout.master')
<head>
     <style>   
     h1 {
         background-color: #a5c422;
         /* Warna hijau */
         text-align: left;
         /* Mengatur teks di kiri */
         font-family: Arial, sans-serif;
         /* Mengatur jenis font */
         margin: 20px 0;
         /* Memberi ruang di atas dan bawah heading */
         color: white;
         padding: 20px;
     }
     /* Gaya CSS untuk tata letak form */
     
     .konsul-container {
         display: flex;
         justify-content: space-between;
         margin: 0 auto;
         width: 80%;
     }
     
     .form-left,
     .form-right {
         width: 48%;
         margin-bottom: 20px;
         /* Memberi jarak antara bagian form */
     }
     
     label {
         display: block;
         margin-bottom: 5px;
         font-family: Arial, sans-serif;
         color: #333;
     }
     
     input,
     textarea {
         width: 100%;
         padding: 10px;
         margin-bottom: 15px;
         box-sizing: border-box;
         border: 1px solid #ccc;
         border-radius: 4px;
         font-family: Arial, sans-serif;
     }
     
     .form-right textarea {
         height: 180px;
     }
     
     input[type="submit"] {
         background-color: #a5c422;
         color: white;
         border: none;
         cursor: pointer;
         padding: 10px 20px;
         border-radius: 4px;
         font-family: Arial, sans-serif;
     }
     
     input[type="submit"]:hover {
         background-color: #a5c422;
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
                 <li class="appointment-btn"><a href="#appointment">Login</a></li>
              </ul>
         </div>
 
    </div>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
 </section>


 {{-- <section id="appointment" data-stellar-background-ratio="3">
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
                                    <input type="text" class="form-control" id="name" name="name" placeholder="keluhan">
                               </div>

                               <div class="col-md-6 col-sm-6">
                                    <label for="email">Sudah Berapa Lama?</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Hari/Jam">
                               </div>

                               <div class="col-md-6 col-sm-6">
                                    <label for="date">Select Date</label>
                                    <input type="date" name="date" value="" class="form-control">
                               </div>

                               <div class="col-md-6 col-sm-6">
                                    <label for="select">Select Department</label>
                                    <select class="form-control">
                                         <option>General Health</option>
                                         <option>Cardiology</option>
                                         <option>Dental</option>
                                         <option>Medical Research</option>
                                    </select>
                               </div>

                               <div class="col-md-12 col-sm-12">
                                    <label for="telephone">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                    <label for="Message">Additional Message</label>
                                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                    <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                               </div>

                          </div>
                    </form>
                </div>
           </div>
      </div> 
 </section> --}}

    <h1>Konsultasi</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    
     @csrf
    <div class="konsul-container">
     <div class="form-left">
              <label for="name">Nama </label>
              <input type="text" id="name" name="name" required>


              <label for="jadwal">Jadwal</label>
              <input type="date" name="jadwal" value="" class="form-control" required>

      </div>
      <div class="form-right">
              <label for="spesialisasi">Dokter</label>
              <select name="spesialisasi" id="spesialisasi" required>
               <option value="">Pilih Spesialisasi</option>
               @foreach($spesialisasi as $s)
                   <option value="{{ $s->spesialisasi }}">{{ $s->spesialisasi }}</option>
               @endforeach
           </select>

           <br></br>

              <label for="message">Konsultasi</label>
              <textarea id="message" name="message" rows="4" cols="50" required></textarea>
              <form action="{{ route('konsultasi.store') }}" method="POST">
              <input type="submit" value="Submit">
               </form>
          
      </div>
        </div>
    
 @section('content')
</body>
@endsection