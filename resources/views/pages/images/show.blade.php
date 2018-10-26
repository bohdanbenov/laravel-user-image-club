@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Random image for {{ Auth::user()->firstname }}</h1>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $rand_image[0]['url'] }}" alt="Random image">
            <div class="card-body">
                <form method="post" action="/images">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                            <label for="image_id">Image ID</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="{{ $rand_image[0]['id'] }}" id="image_id" name="image_id">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="image_url">Image URL</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" value="{{ $rand_image[0]['url'] }}" id="image_url" name="image_url">
                        </div>
                    </div>

                    <div class="form-group m-auto">
                        <button type="submit" class="btn btn-primary">Add to favorites</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-sm-8 blog-main">
        <div class="row">
            @if(isset($all_images))
                @foreach($all_images as $image)
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ $image['image_url'] }}" alt="Your favorite picture">
                            <div class="card-body">
                                <p class="card-text">Image ID: {{ $image['image_id'] }}</p>
                                <a href="/images/{{ $image['image_id'] }}" class="btn btn-danger">Delete from favorites</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ $image['updated_at'] }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
