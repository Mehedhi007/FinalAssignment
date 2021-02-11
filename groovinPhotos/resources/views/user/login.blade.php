@extends('layouts.master')



@section('content')

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(session('registerOk'))
                    <p class ="alert alert-success ">{{ session('registerOk') }}</p>
                @endif

                <h2>User Login</h2>
                <p>
                    Login and start uploading and reveal your photos to the globe!
                </p>
                <!-- start contact form -->
                <div class="" id="">
                    @if(session('loginError'))
                        <p class ="alert alert-danger ">{{ session('loginError') }}</p>
                    @endif

                    @include('error.errors')

                    <form action="" method="post" role="form" class="contactForm">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" name="username" class="form-control"  placeholder="Username" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />

                        </div>



                        <div class="form-group">
                            <label for="subject">Password</label>
                            <input type="password" class="form-control" name="password"  placeholder="Subject" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>



                        <button type="submit" class="btn btn-lg btn-theme pull-left">Login</button>
                    </form>

                </div>
                <!-- end contact form -->
                <div class="clear"></div>
            </div>

        </div>
    </div>

    <br>
    <br>
@endsection
