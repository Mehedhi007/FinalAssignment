@extends('layouts.master')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Admin Login</h2>

                <div class="" id="">
                    @if(session('loginError'))
                        <li class="alert alert-danger">{{ session('loginError') }}</li>
                    @endif

                    @include('error.errors')
                    <form action="{{ route('admin.loginInfo') }}" method="POST" role="form" class="contactForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" name="username" class="form-control"  placeholder="Your Name"/>
                        </div>

                        <div class="form-group">
                            <label for="subject">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password"  />

                        </div>


                        <button type="submit" class="btn btn-lg btn-theme pull-left">Login</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
