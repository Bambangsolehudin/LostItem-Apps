@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Item') }}</div>
                <div class="card-body">
                   
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('item.update', $item->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input name="name" type="text" class="form-control" id="name" value="{{ $item->name }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Type</label>
                            <input name="type" type="text" class="form-control" id="type" value="{{ $item->type }}">
                          </div>
                        <div class="form-group">
                            <label for="category">Category</label> <br>
                            <select class="form-select form-select-lg mb-3 form-control" aria-label="Default select example" name="category">
                                <option value="{{ $item->category }}">Jangan dirubah ( {{ $item->category  }})</option>
                                <option value="barang hilang">Barang Hilang</option>
                                <option value="barang temuan">Barang Temuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input name="weight" type="text" class="form-control" id="weight" value="{{ $item->weight }}">
                        </div>
                        <div class="form-group">
                            <label for="detail">detail</label>
                            <input name="detail" type="text" class="form-control" id="detail" value="{{ $item->detail }}">
                        </div>
                        <div class="form-group">
                            <label for="question">question</label>
                            <input name="question" type="text" class="form-control" id="question" value="{{ $item->question }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
