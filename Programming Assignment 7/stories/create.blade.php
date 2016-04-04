<!doctype html>
<html lang="en">
<head>
<style>
#header {
	background-color:#eeeeee;
	color:black;
	text-align:center;
	padding:5px;
}
</style>
<meta charset="utf-8" />
<title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div id="header">
<h1>Create A New Story Here!!</h1>
</div>
	{!! Form::open(['action' => 'StoryController@store','method'=>'Post']) !!}
		<div class="row">
			<div class="col-md-3 col-md-offset-1">
				<h3>Location:</h3>
				<select name="location_id">
				@foreach($locations as $location)
					<option value="{{ $location->id}}">{{$location->value}}</option>
				@endforeach
				</select>
				<h3>Title:</h3>
				{!! Form::text('title','',$attributes=array('style' => "width:150px; height:35px;")) !!}
				<h3>Story:</h3>
				{!! Form::textarea('story') !!}
				<h3>Publish</h3>
				{!! Form::select('publish',array(1=>'yes',0=>'no'))!!}
				<br><br>
				{!! Form::submit('Save',array('class'=>'button tiny round')) !!}
			</div>
		</div>
	
	
	{!! Form::close() !!}

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
crossorigin="anonymous"></script>
</body>
</html>