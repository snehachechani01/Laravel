<!DOCTYPE html>
<html>
<head>
        <title>Welcome to Laravel</title>
        
</head>
<body>
    <div class="container">
        <h1>Task List</h1>

        @if ($tasks->isEmpty())
            <p>There are no tasks to display.</p>
        @else
            <ul>
                @foreach ($tasks as $task)
                    <li>
                        <h2>{{ $task->Title }}</h2>
                        <p>{{ $task->Description }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>


