<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
	<h3 class="text-center">Create Todo</h3>
	<a href="/todo" class="bg-blue-400">View All Todo</a>
	<x-alert />
<form action="/todo/create" class="py-5 text-center pt-5" method="post">
	@csrf
	<input type="text" name="title" class="py-2 px-2 border rounded">
	<input type="submit" name="submit" value="create" class="p-2 border rounded">

</form>


</body>
</html>