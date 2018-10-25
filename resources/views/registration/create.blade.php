@extends('layouts.master')

@section('content')
    <div class="col-sm-8">
        <h1>Register</h1>

        <form method="post" action="/register">
            {{ csrf_field() }}


            <div class="form-group">
                <label for="firstname">Firstname: </label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="lastname">Lastname: </label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation: </label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <hr>

            <div class="form-group">
                <label for="country">Country: </label>
                <input type="text" class="form-control" id="country" name="country">
            </div>

            <div class="form-group">
                <label for="city">City: </label>
                <input type="text" class="form-control" id="city" name="city">
            </div>

            <div class="form-group">
                <label for="street">Street: </label>
                <input type="text" class="form-control" id="street" name="street">
            </div>

            <div class="form-group">
                <label for="postcode">Post code: </label>
                <input type="number" class="form-control" id="postcode" name="postcode">
            </div>

            <div class="form-group">
                <label for="homenumber">Home number: </label>
                <input type="number" class="form-control" id="homenumber" name="homenumber">
            </div>

            <div class="form-group">
                <label for="sex">Sex: </label>
                <select class="custom-select" name="sex" id="sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>
@endsection
