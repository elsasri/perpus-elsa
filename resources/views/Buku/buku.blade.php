@extends('layouts.master')

@section('content')
<div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <div class="mb-4">
                            <a href="{{ route('buku.create') }}" class="btn btn-primary">
                                + Tambah Data Buku
                            </a>

                    <div class="table-responsive">
                    <div class="p-3 mb-2 bg-danger-subtle text-danger-emphasis">
                    <table class="table table-bordered border-primary">
                                <thead class="bg-primary text-black">
                                    <tr>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Penerbit</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                 </div>

                                
                            </thead>
                            <tbody>
                                @forelse ($buku as $b)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{asset('storage/'.$b->foto) }}" alt="Foto Buku" width="100">
                                        </td>
                                      
                                        <td>{{ $b->judul }}</td>
                                        <td>{{ $b->penulis }}</td>
                                        <td>{{ $b->penerbit }}</td>
                                        <td>{{ $b->tahun_terbit }}</td>
                                        <td>
                                     
                                            <a href="{{ route('buku.edit', $b->id) }}" class="btn btn-primary">
                                            <i class="bi bi-pen-fill"></i>
                                            </a>
                                            
                                        <a href="{{ route('buku.hapus', $b->id) }}" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                            
                                        </a>
                                        </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data buku.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection