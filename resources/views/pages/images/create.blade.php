@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Image') }}</div>
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
                    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <label for="title">Items</label>
                                <select name="item_id" required class="form-control">
                                    <option value="">Pilih Items</option>
                                    @foreach($items as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image" placeholder="Image" >
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Simpan
                            </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
