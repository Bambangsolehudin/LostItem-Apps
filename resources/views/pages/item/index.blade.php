@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('My Items') }}</div>

                <div class="card-body">
                    <a href="{{ route('item.create') }}" class="btn btn-primary shadow-sm">Tambah</a>


                    <table class="table">

                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Category</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Quetion</th>
                            <th scope="col">Action</th>

                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($items as $item )
                        <tr>
                            
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->weight }}</td>
                            <td>{{ $item->detail }}</td>
                            <td> {{ $item->question }} </td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('item.edit', $item->id) }}"> Edit</a> 
                                <form action="{{ route('item.destroy', $item->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" >
                                        delete
                                    </button>
                                </form>
                                <a href="{{ route('answer-detail', $item->id) }}" class="btn btn-sm btn-primary">answer</a> 

                            </td>                            
                        </tr>
                        @empty
                        <td colspan="6" class="text-center">
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
