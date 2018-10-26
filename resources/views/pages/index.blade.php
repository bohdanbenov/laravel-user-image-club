@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        @if(isset($msg))
            <p>{{ $msg }}</p>
        @elseif(isset($img_id))
            <ul>
                @foreach($img_id as $id)
                    <li>{{ $id }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
