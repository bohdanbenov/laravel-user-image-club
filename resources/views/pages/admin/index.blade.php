@extends('layouts.master')

@section('content')
    <div class="col-sm-9 blog-main">
        @if(isset($all_users))
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Country</th>
                        <th scope="col">City</th>
                        <th scope="col">Sex</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($all_users as $user)
                    <tr>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->country }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->sex }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
