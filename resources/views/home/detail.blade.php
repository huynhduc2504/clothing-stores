@extends('layouts.layout')
@section('content')
<h1>{{$data->Name}}</h1>
<img src="{{$data->ImageURL}}" alt="">
<h1>{{$data->Price}}$</h1>


@endsection