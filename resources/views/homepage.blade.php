@extends('layouts.main_layout')
@section('content')
    <div class="col-12 text-center">

        contenuto bello
        @foreach ($projects as $i)

        <card :project="{{$i}}">

        </card>
        @endforeach
    </div>

@endsection
