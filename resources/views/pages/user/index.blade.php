@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('My Profile') }}</div>
                {{-- <img src="{{ Storage::url($item->image->first()->image) }}" /> --}}
                <div class="card-body">
                      <div class="row">
                          <div class="col-6">
                              
                            <div class="form-group">
                                <label for="name">Name :</label>
                                {{ $user->name }}
                            </div>
                            <div class="form-group">
                                <label for="email">Email : </label>
                                {{ $user->email }}
                            </div>
                            <div class="form-group">
                                <label for="nomor">Nomor : </label>
                                {{ $user->nomor }}
                            </div>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">edit</a>
                          </div>

                          <div class="col-6">
                            <img src="{{ Storage::url($user->image) }}" alt="" style="width: 150px" class="img-thumbnail">    
                          </div>
                      </div>


                    

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
