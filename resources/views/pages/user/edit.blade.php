@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data User') }}</div>
                {{-- <img src="{{ Storage::url($item->image->first()->image) }}" /> --}}
                <div class="card-body">
                <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <label for="name">Image</label> <br />
                            <img src="{{ Storage::url($user->image) }}" alt="" style="width: 150px" class="img-thumbnail">
                            <input type="file" class="form-control" name="image" placeholder="Image">
                       
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="text" class="form-control" id="email" readonly="" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="nomor">nomor</label>
                            <input name="nomor" type="text" class="form-control" id="nomor" value="{{ $user->nomor }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
