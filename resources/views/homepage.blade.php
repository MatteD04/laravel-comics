@extends('layouts.app')


@section('content')
    <div class="container box">
        <!-- <ul>
            @foreach ($comics as $comic)
                <li>{{$comic['title']}}</li>
            @endforeach
        </ul> -->
        @foreach ($comics as $comic)
            <div class="ms-card">
                <div>
                    <img src="{{ $comic['thumb'] }}">
                </div>
                <div>
                    <p>{{$comic['title']}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection