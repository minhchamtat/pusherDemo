<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.5 custom validation rules example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<h1>Laravel 5.5 custom validation rules example</h1>
		<form method="POST" action="{{ action('CustomValidateControler@postCustom') }}">
			{{ csrf_field() }}

			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Name">
				@if ($errors->has('name'))
					<span class="text-danger">{{ $errors->first('name') }}</span>
				@endif
			</div>

			<div class="form-group">
				<label>Number:</label>
				<input type="text" name="thu" class="form-control" placeholder="Thứ">
				@if ($errors->has('thu'))
					<span class="text-danger">{{ $errors->first('thu') }}</span>
				@endif
			</div>

			<div class="form-group">
				<button class="btn btn-success btn-submit">Submit</button>
			</div>

		</form>
	</div>
</body>
</html>