@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Image') }}</div>
                <div class="card-body">
                   
                    <form action="{{ route('image.update', $image->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                                <label for="title">Item</label>
                                <select name="item_id" required class="form-control">
                                    <option value="{{ $image->item_id }}">Jangan diubah</option>
                                    @foreach($item as $i)
                                        <option value="{{ $i->id }}">
                                            {{ $i->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{ Storage::url($image->image) }}" />
                                <input type="file" class="form-control" name="image" placeholder="Image">
                            </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            Ubah
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
