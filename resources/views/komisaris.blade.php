@extends('layouts.template')

@section('judul')
Komisaris
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
                <img src="tema/img/team/komisaris utama.jpeg" class="img-fluid" alt="">
                <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info">
                <h4>Aris Toharisman</h4>
                <span>Komisaris Utama</span>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
                <div class="member-img">
                <img src="tema/img/team/komisaris.jpg" class="img-fluid" alt="">
                <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info">
                <h4>Muhammad Novi Saputro</h4>
                <span>Komisaris</span>
                </div>
            </div>
            </div>
            {{-- /content --}}
        </div>
    
@endsection