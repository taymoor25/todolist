<!DOCTYPE html>
<html>
<head>
	<title>All todo</title>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
<h1 class="text-center"><b>All todo</b></h1>
<a href="{{route('todo.create')}}">new todo</a>
	<ul>
    
    	<div class="text-center">

@foreach($todos as $todo)
<li>
{{$todo->title}}
<a href="{{route('todo.edit' ,$todo->id)}}"><span class="fas fa-edit px-5"></span></a>
@if ($todo->completed)
<span class="px-3 fas fa-check text-green-400"></span>
@else 
<span  class="px-3 fas text-red-400 cursor-pointer fa-check" onclick="event.preventDefault();console.log('yepppp');document.getElementById({{$todo->id}}).submit();"></span>
    <form hidden action="{{route('todo.completed',$todo->id)}}" id="{{$todo->id}}" method="post">
    	@csrf
    	@method('put')


    </form>


@endif

</li>
@endforeach


    		


	</ul>
</div>
	




</body>
</html>