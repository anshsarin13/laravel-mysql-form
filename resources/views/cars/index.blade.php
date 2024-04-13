@extends('layout')

@section('title')
LIST CARS
@endsection

@section('mainContent')
<h1>Hello  

</h1>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td> 
                <a href="cars/ {{$car->id}}">
                {{$car->name}}
                </a>
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>


@endsection