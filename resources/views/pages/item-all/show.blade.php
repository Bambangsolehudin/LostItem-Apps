@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @foreach ( $item->image as $image)
        <div class="card" style="width: 18rem; margin:12px;">
            <img src="{{ Storage::url($image->image) }}" class="card-img-top" alt="..."/> 
        </div> 
    @endforeach
        
    </div>
</div>



<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Barang') }}</div>
                {{-- <img src="{{ Storage::url($item->image->first()->image) }}" /> --}}
                <div class="card-body">
                <form method="POST" action="{{ route('answer') }}">
                
                   <h5 class="card-title">Nama Barang : {{ $item->name }}</h5>
                    <p class="card-text">Type : <span class="btn btn-warning btn-sm">{{ $item->type }} <span></p>
                    <p class="card-text">detail : {{ $item->detail }}</p>
                    <p class="card-text">hubungi : {{ $item->user->nomor}}</p>
                    <p class="card-text">Pertanyaan : </p>
                    <p class="card-text">{{ $item->question }}</p>
                    
                        @csrf
                        <div class="form-group">
                            <label for="name">Jawaban</label>
                            <input name="user_id" type="hidden" class="form-control" id="user_id" value="{{ $item->user_id }}">
                            <input name="item_id" type="hidden" class="form-control" id="item_id" value="{{ $item->id }}">
                            <input name="answer12" type="text" class="form-control" id="answer">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = {{ $item->id }} // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://bambangsolhud-com.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
    </div>
</div>
@endsection
