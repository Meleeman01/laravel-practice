<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>tasks</h1>
	@foreach ($tasks as $task) 
         <a href="/tasks/{{$task->id}}"><li>{{$task->body}}</li> </a>
    @endforeach  <!--blade syntax is bedder-->
</body>
</html>