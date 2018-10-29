@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        @if(isset($img_id) && isset($img_url))
            <h1>Here 10 great pictures for you</h1>
            <div class="grid">
                @foreach($img_url as $url)
                    <img src="{{ $url }}" alt="Random image" class="img-thumbnail">
                @endforeach
            </div>
        @endif
    </div>
@endsection
