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

            <h2 class="text-center">GALLERY</h2><br>

            @foreach($photos as $photo)
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">{{ $photo->title}} ({{$photo->description}})</div>
                    <div class="panel-body">
                        <img style="width: 100%;"src="{{asset('photos/'.$photo->image)}}" alt="">
                        @if($photo->status == 'approve')
                            <a href="{{ route('user.gallery.photoStatus',[$photo->id,'selling']) }}" class="btn btn-warning">Consider For Selling</a>
                        @endif
                    </div>
                    <div class="panel-footer">
                        <p>Status: {{ $photo->status }}</p>

                    </div>
                </div>
            </div>
                @endforeach


        </div>
        {{$photos->links()}}
    </div>

    <br>
    <br>
@endsection
