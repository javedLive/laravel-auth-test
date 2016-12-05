<html>
	<head>
		<head><title>Hello Test</title> </head>
	</head>
	<body>
		{!! Form::open(['method' => 'POST', 'route' => 'course.store', 'class'=>'form-horizontal']) !!}
		{!! Form::token(); !!}
		  <div class="form-group">
		    <label for="Name">Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>		  
		  <button type="submit" class="btn btn-default">Submit</button>
		 {!! Form::close() !!}
	</body>
</html>
