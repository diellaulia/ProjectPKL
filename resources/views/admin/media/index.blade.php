@extends('admin.layouts.app')

@section('content')
      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Media</h4>
                  <p class="card-description">
                    <a href="{{ route('medium.create')}}" class="btn btn-primary btn-sm">Tambah</a>
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
                            Judul
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
                        @foreach ($medias as $item)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->judul }}</td>
                              <td>{{ Str::limit($item->konten,30, '...') }}</td>
                              <td>
                                <a href="{{ route('medium.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                 <form method="POST" action="{{ route('medium.destroy', $item->id) }}">
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