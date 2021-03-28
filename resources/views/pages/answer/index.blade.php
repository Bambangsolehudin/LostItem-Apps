@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Answer') }}</div>

                <div class="card-body">
                    {{-- <a href="{{ route('item.create') }}" class="btn btn-primary shadow-sm">Tambah</a> --}}


                    <table class="table">

                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Nama Penjawab</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Jawaban</th>
                            <th scope="col">Aksi</th>

                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($answers as $item )
                        <tr>    
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->item->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->nomor }}</td>  
                            <td>{{ $item->answer }}</td>  
                            <td>
                                <a href="{{ route('answer-detail', $item->id) }}" class="btn btn-primary">detail</a>    
                            </td>                           

                        </tr>
                        @empty
                        <td colspan="4" class="text-center">
                            Data Kosong
                        </td>
                            
                        @endforelse
                 
                     
                        </tbody>
                      </table>

                 
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
