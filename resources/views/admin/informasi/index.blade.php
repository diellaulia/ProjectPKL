@extends('admin.layouts.app')

@section('content')
      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Informasi</h4>
                  <p class="card-description">
                    <a href="{{ route('information.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                    {{-- Add class <code>.table-bordered</code> --}}
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No.
                          </th>
                          <th>
                            Gambar
                          </th>
                          <th>
                            Judul
                          </th>
                          <th>
                            Slug
                          </th>
                          <th>
                            Kontent
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($informations as $item)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td><img src="{{ Storage::url('information/'.$item->gambar)}}" alt="{{ Storage::url('information/'.$item->gambar)}}"></td>
                              <td>{{ $item->judul }}</td>
                              <td>{{ $item->slug }}</td>
                              <td>{{ Str::limit($item->konten,30, '...') }}</td>
                              <td>
                                <a href="{{ route('information.edit', $item->id )}}" class="btn btn-success btn-sm">Edit</a>
                                 <form method="POST" action="{{ route('information.destroy', $item->id) }}">
                                    @method('DELETE')
                                    @csrf
                                   <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection