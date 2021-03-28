@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @foreach ( $item->image as $image)
        <div class="card" style="width: 18rem; margin:12px;">
            <img src="{{ Storage::url($image->image) }}" class="card-img-top" alt="..."/> 
        </div> 
    @endforeach
        
    </div>
</div>



<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Barang') }}</div>
                {{-- <img src="{{ Storage::url($item->image->first()->image) }}" /> --}}
                <div class="card-body">
                <form method="POST" action="{{ route('answer') }}">
                
                   <h5 class="card-title">Nama Barang : {{ $item->name }}</h5>
                    <p class="card-text">Type : <span class="btn btn-warning btn-sm">{{ $item->type }} <span></p>
                    <p class="card-text">detail : {{ $item->detail }}</p>
                    <p class="card-text">hubungi : {{ $item->user->nomor}}</p>
                    <p class="card-text">Pertanyaan : </p>
                    <p class="card-text">{{ $item->question }}</p>
                    
                        @csrf
                        <div class="form-group">
                            <label for="name">Jawaban</label>
                            <input name="user_id" type="hidden" class="form-control" id="user_id" value="{{ $item->user_id }}">
                            <input name="item_id" type="hidden" class="form-control" id="item_id" value="{{ $item->id }}">
                            <input name="answer" type="text" class="form-control" id="answer">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
