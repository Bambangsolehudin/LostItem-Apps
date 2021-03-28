@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Detail User') }}</div>
                <div class="card-body">

                    <div class="row justify-content-center">
                        <img src="{{ Storage::url($user->image) }}" alt="" style="width: 300px" class="img-thumbnail">
                    </div>
                
                
            <table class="table table-bordered">
               
            <tr>
                <td> Nama </td>
                <td> {{ $user->name }}  </td>
            </tr>
            <tr>
                <td> Email </td>
                <td> {{ $user->email }}  </td>
            </tr>
            <tr>
                <td> Nomor </td>
                <td> {{ $user->nomor }}  </td>
            </tr>
      
            </table>
        </div></div></div></div> </div>

</div>

@endsection