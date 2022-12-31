@extends('layouts.template')

@section('judul')
Informasi
@endsection

@section('main')
<div class="container" data-aos="fade-up">

    <div class="row" style="margin-top: 20vh">
            <div class="col-lg-12">
            <h4>Informasi</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">informasi</li>
                        </ol>
                    </nav>
                <section style="text-align:justify">
<div class="container">
  <div class="row">
@foreach($informasi as $key => $data)
    <div class="col-lg-4">
      <img src="   {{$data->gambar}}" alt="">
    </div>
    <div class="col-lg-4">
        {{$data->konten}}
    </div>
    {{-- <div class="col">
      {{$data->gambar}}
    </div>
    <div class="col">
      {{$data->judul}}
    </div>
    <div class="col">
      {{$data->konten}}
    </div> --}}
    @endforeach
  </div>
</div>

@endsection