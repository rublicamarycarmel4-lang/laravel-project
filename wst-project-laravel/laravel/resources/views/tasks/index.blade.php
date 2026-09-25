<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>


    <style>
        body {
            font-family: Arial, sans-serif;
            background: #dc2626;
            margin: 0;
            padding: 30px;
        }


        .container {
            max-width: 500px;
            text-align: center;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }


        h1 {
            color: #6c4ab6;
        }


        .add-button {
            display: inline-block;
            background: #5003f6;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }


        .task {
            border: 1px solid #f0ff23;
            padding: 15px;
            margin-top: 15px;
            border-radius: 5px;
        }


        .edit {
            color: #34f35a;
        }


        .delete {
            background: #d9534f;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
        }


        .status {
            font-weight: bold;
        }
    </style>
</head>



<body>

<div class="container">

    <h1>Personal Task Manager</h1>

    <a href="/tasks/create" class="add-button">+ Add Task</a>

    <h2>My Tasks</h2>

    @if ($tasks->count() > 0)

        @foreach ($tasks as $task)

            <div class="task">

                <h3>{{ $task->task_name }}</h3>

                <p>{{ $task->description }}</p>

                <p class="status">
                    Status: {{ $task->status }}
                </p>

                <p>
                    Due Date: {{ $task->due_date }}
                </p>

                <a href="/tasks/{{ $task->id }}/edit" class="edit">
                    Edit
                </a>

                <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="delete">
                        Delete
                    </button>
                </form>

            </div>

        @endforeach

    @else

        <p>No tasks yet.</p>

    @endif

</div>

</body>
</html>