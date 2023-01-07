@extends('layouts.template')

@section('judul')
Direksi
@endsection

@section('main')
<section id="sejarah" class="hero d-flex align-items-center">
<div class="container" data-aos="fade-up">
     <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>

        <div class="row gy-4">

        <div class="d-flex justify-content-center">

            {{-- content --}}
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                <div class="member-img">
                    <img src="tema/img/team/direktur.jpg" class="img-fluid" alt="">
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>Arif Suhariadi</h4>
                    <span>Plt. Direktur</span>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                <div class="member-img">
                    <img src="tema/img/team/team-4.jpg" class="img-fluid" alt="">
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>Tumbas Ginting</h4>
                    <span>SEVP Operation</span>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                <div class="member-img">
                    <img src="tema/img/team/team-4.jpg" class="img-fluid" alt="">
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>Sihur Antoni</h4>
                    <span>SEVP Business Support</span>
                </div>
                </div>
            </div>
            {{-- /content --}}
        </div>
    
@endsection