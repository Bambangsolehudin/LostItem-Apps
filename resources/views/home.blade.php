@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                {{-- <div class="card-header">Header</div> --}}
                <div class="card-body text-secondary">
                  <a href="{{ url('my-profile') }}"><h5 class="card-title">My Profile</h5></a>
                  <p class="card-text"><hr></p>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                {{-- <div class="card-header">Header</div> --}}
                <div class="card-body text-secondary" >
                  <a href="{{ url('item') }}"><h5 class="card-title">Items</h5></a>
                  <p class="card-text">total : {{ $item }}</p>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                {{-- <div class="card-header">Header</div> --}}
                <div class="card-body text-secondary">
                  <a href="{{ url('image') }}"><h5 class="card-title">Items-Image</h5></a>
                  <p class="card-text">total : {{ $image }}</p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
