@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Item') }}</div>
                <div class="card-body">
                   
                    <form method="POST" action="{{ route('item.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input name="name" type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input name="type" type="text" class="form-control" id="type">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input name="category" type="text" class="form-control" id="category">
                        </div>
                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input name="weight" type="text" class="form-control" id="weight">
                        </div>
                        <div class="form-group">
                            <label for="detail">detail</label>
                            <input name="detail" type="text" class="form-control" id="detail">
                        </div>
                        <div class="form-group">
                            <label for="question">question</label>
                            <input name="question" type="text" class="form-control" id="question">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
