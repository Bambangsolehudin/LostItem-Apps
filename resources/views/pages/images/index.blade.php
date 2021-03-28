@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Image') }}</div>

                <div class="card-body">
                    <a href="{{ route('image.create') }}" class="btn btn-primary shadow-sm">Tambah</a>


                    <table class="table">

                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item</th>
                            <th scope="col">Images</th>
                            <th scope="col">Aksi</th>

                          </tr>
                        </thead>
                        <tbody>
    
                        @forelse ($items as $item )  
                        <tr>
                            
                            <td>{{ $item->id }}</td>
                            <td> {{  $item->item->name }} </td>
                            <td>
                                <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail">    
                            </td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('image.edit', $item->id) }}"> Edit</a> 
                                <form action="{{ route('image.destroy', $item->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" >
                                        delete
                                    </button>
                                </form>
                            </td>                            
                        </tr>
                        @empty
                        <td colspan="3" class="text-center">
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
