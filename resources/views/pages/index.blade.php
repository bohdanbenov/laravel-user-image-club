@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        @if(auth()->check())
            <h1>Profile</h1>

            <ul>
                <li>Firstname: {{auth()->user()->firstname}}</li>
                <li>Lastname: {{auth()->user()->lastname}}</li>
                <li>Email: {{auth()->user()->email}}</li>
                <li>Age: {{auth()->user()->age}}</li>
                <li>Sex: {{auth()->user()->sex}}</li>
                <li>Country: {{auth()->user()->country}}</li>
                <li>City: {{auth()->user()->city}}</li>
                <li>Street: {{auth()->user()->street}}</li>
                <li>Homenumber: {{auth()->user()->homenumber}}</li>
            </ul>
        @else
            <script type="text/javascript">
                $(document).ready(function() {
                    for(let i = 0; i < 10; i++){
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'get',
                            url: '/randimg',
                            success: function (data) {
                                $('#image' + i).attr('src', data);
                            }
                        })
                    }
                });
            </script>

            <h1>Here 10 great pictures for you</h1>
            <div class="grid">
                @for($i = 0; $i < 10; $i++)
                    <img src="/img/main_placeholder.png" id='{{'image'.$i}}' alt="Random image" class="img-thumbnail">
                @endfor
            </div>
        @endif
    </div>
@endsection

@section('sidebar')
    @include('layouts.sidebar')
@endsection
