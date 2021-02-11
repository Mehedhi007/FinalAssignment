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
                <h4><i class="icon-envelope"></i><strong>Register</strong></h4>
                <p>
                    Register to stat uploading and reveal your photos to the globe!
                </p>
                <!-- start contact form -->
                <div class="" id="">
                    @include('error.errors')

                    <form action="{{route('register.save')}}" method="post" role="form" class="contactForm">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" name="username" class="form-control"  placeholder="Username" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />

                        </div>

                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>


                        <div class="form-group">
                            <label for="subject">Password</label>
                            <input type="password" class="form-control" name="password"  placeholder="Subject" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>



                        <div class="form-group">
                            <label for="subject">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation"  placeholder="Subject" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>


                        <button type="submit" class="btn btn-lg btn-theme pull-left">Register</button>
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
