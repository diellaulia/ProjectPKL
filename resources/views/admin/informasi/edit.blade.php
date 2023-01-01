@extends('admin.layouts.app')

@section('content')
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Informasi</h4>

                  <form class="forms-sample" action="{{ route('informasi.update', $informasi->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Judul</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $informasi->judul }}" id="" name="judul" placeholder="Mobile number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">File upload</label>
                      <div class="col-sm-9">
                        <input type="file" name="gambar" class="form-control" value="{{ $informasi->gambar }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Konten</label>
                      <div class="col-sm-9">
                       <textarea class="form-control" name="konten" id="exampleTextarea1" rows="4">{{ $informasi->konten }}</textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
@endsection