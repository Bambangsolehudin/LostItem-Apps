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
                              <br>
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
                          
                          </div>

                          <div class="col-6" >
                            <img src="{{ Storage::url($user->image) }}" alt="" style="width: 150px margin-right:0; margin-top:0;" class="img-thumbnail">    
                          </div>

                         
                      </div>
                      <hr>
                      <div class="row justify-content-center">
                        
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning ">Edit</a>
                      </div>


                    

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
