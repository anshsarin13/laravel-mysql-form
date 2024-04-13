@extends('layout')

@section('mainContent')
<h1>  show cars

</h1>
<div style="color:{{$car->color}}">
    <strong>
        {{$car->name}}
    </strong><br>
    <strong>
        {{$car->company}}
    </strong>
</div>
<a href="{{$car->id}}/edit">Edit Car</a>
@endsection