<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
</head>
<body>
	<div>
	@foreach($data as $per)
		<span style="background-color:grey;padding: 5px;display: inline;width: 100px;">{{$per->name}}
		</span>
		<span style="background-color:red;padding: 5px;display: inline;width: 100px;">{{$per->email}}
		</span>
	@endforeach
	</div>
	<div>
		{{ $data->links() }}
	</div>
</body>
</html>