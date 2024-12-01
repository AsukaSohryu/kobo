@extends('layout.layout')

@section('content')
<div class="container h-100" style="width: fit-content;">
    <div class="row h-100">
        <div class="col my-auto mx-auto p-4" style="background-color: white; box-shadow: 0 0 13px 0 hsla(0, 0%, 80%, .5); border-radius: 16px;">
            <h2 class="text-center">Admin</h2>
            @if(session('loginError'))
                <p style="color: red;">{{ session('loginError') }}</p>
            @endif
            <form role="form" method="post" action="{{ route('login.post') }}">
                @csrf
                <label>Username</label>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name" aria-label="Email" aria-describedby="email-addon" name="name" required>
                </div>
                <label>Password</label>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection