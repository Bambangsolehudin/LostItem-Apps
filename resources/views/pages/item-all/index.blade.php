@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('barang') }}" class="btn btn-primary">All</a>
    <a href="{{ route('barang-hilang') }}" class="btn btn-danger">Barang Hilang</a>
    <a href="{{ route('barang-temuan') }}" class="btn btn-warning">Barang Temuan</a>

    


    <div class="row justify-content-center">
        
        @foreach ($items as $item )
            <div class="card" style="width: 18rem; margin:20px; height:18rem;">
                
                <img src="{{ $item->image->count() ? Storage::url($item->image->first()->image) : '' }}" class="card-img-top" alt="" style="width: 200px; margin:auto; height:50%;">
                {{-- <img src="{{ Storage::url($item->image->image) }}" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="@if($item->type == 'barang hilang') 
                         card-text badge bg-danger text-white
                    @else
                        card-text badge bg-warning text-dark
                    @endif
                    ">{{ $item->type }}</p>
                    <br>
                    <a href="{{ route('show', $item->id) }}" class=" text-center btn btn-primary">Lihat</a>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endsection
