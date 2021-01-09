<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
        
        <form action="{{route('todo.update',$todo->id)}}" class="py-5 text-center pt-5" method="post">
	@csrf
	@method('patch');
	<input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded">
	<input type="submit" name="submit" value="update" class="p-2 border rounded">

</form>

</body>
</html>