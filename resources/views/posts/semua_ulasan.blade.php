@extends('layouts.main')
@section('content')
<section id="intro">

    <div class="intro-text">
      <h2 style="padding-top:30px;"><strong>Semua Ulasan</strong></h2>
      <p>Temukan Ulasan Tentang Makanan Yang Anda Butuhkan</p>
    </div>

  </section><!-- #intro -->

  <main id="main">

<!--==========================
 Ulasan Section
============================-->
<section id="ulasan" class="section-bg">
 <div class="container">
   <div class="section-header">
     <h3 class="section-title text-center">Semua Ulasan</h3>
     <center>
     <span class="section-divider"></span>
     </center>
     <br>
   </div>
   <center>
        <form action="search" autocomplete="off">
          <div class="wrap">
            <div class="search">
              <input type="text" class="searchTerm" placeholder="Apa yang anda cari" value="" name="search" value="{{ old('search') }}">
                <button type="submit" class="searchButton">
                  <i class="fa fa-search"></i>
                </button>
            </div>
          </div>
        </form>
        </center>
<br>
   <center>
   
   <div class="">
     <div class="row g-2 g-md-4">
       @forelse ($posts as $post)
       <div class="box col-9 col-md-3">
       <img src="{{ asset('/storage/posts/' .$post->image) }}" class="rounded" style="width: 100%;">
         <h4 style="margin-top:20px;" class="title"><a href="">{{ $post->title }}</a></h4>
         <a style="color:white;" href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-danger">Ulasan</a>
       </div>
       @empty
       @endforelse
     </div>
     <div style="color:black;">
     {{ $posts->links() }}
     </div>
   </div>
 </center>
 </div>
 
</section><!-- #ulasan -->
<!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row" >

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Foodia</h3>
              <p>Jika anda membutuhkan informasi lebih lanjut bisa menghubungi media sosial kami dibawah ini</p>
              <div class="social-links">
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Kab.Trenggalek<br>Kec.Suruh Ds.Suruh</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>arkanarya060@gmail.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>0853-3162-4625</p>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->
</main>
@endsection  
</body>
</html>
