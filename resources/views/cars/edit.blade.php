@extends('layout')

@section('title')
UPDATE/DELETE CAR
@endsection

@section('mainContent')
<h1>edit cars</h1>
<form class="form-horizontal" method="post" action="{{ route('cars.update', ['car' => $car->id]) }}">
		@csrf
        @method('put')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md" 
              value="{{$car->name}}" required="required">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="color">Color</label>  
			  <div class="col-md-4">
			  <input id="color" name="color" type="text" placeholder="Enter color" class="form-control input-md"
              value="{{$car->color}}" required="required">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company">Company</label>  
			  <div class="col-md-4">
			  <input id="company" name="company" type="text" placeholder="Enter company name" class="form-control input-md"
              value="{{$car->company}}" required="required">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Save</button>
			  </div>
			</div>

			</fieldset>
		</form>

        <form class="form-horizontal" method="post" action="{{ route('cars.update', ['car' => $car->id]) }}">
        @csrf
        @method('delete')

            <!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">DELETE</button>
			  </div>
			</div>
        </form>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
		<div>
        <a href="{{ route('cars.index') }}">Show Cars</a>
		</div>
        @endsection