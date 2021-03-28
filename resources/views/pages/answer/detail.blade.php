@extends('layouts.app')

@section('content')


<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Answer') }}</div>
                {{-- <img src="{{ Storage::url($item->image->first()->image) }}" /> --}}
                <div class="card-body">
                    
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nama Response</th>
                            <th>Barang</th>
                            <th> Jawaban </th>
                        </tr>
                        @forelse ( $item->answerdetail as $detail )
                        <tr>
                            <td>{{ $detail->id }}</td>
                            <td>
                                <a href="{{ route('user-detail', $item->user->id) }}" id="caca" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $detail->user->name }}</a>
                            </td>
                            <td>{{ $detail->item->name }}</td>
                            <td>{{ $detail->answer}}</td>

                        </tr>
                        @empty
                            <td colspan="4" class="text-center"> Data tidak ditemukan </td>
                        @endforelse
                
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


