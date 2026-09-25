<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #dc2626;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }

        h1 {
            color: #6c4ab6;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 9px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        button {
            margin-top: 20px;
            background: #6c4ab6;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .back {
            margin-left: 10px;
            color: #6c4ab6;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Add New Task</h1>

    <form action="/tasks" method="POST">
        @csrf

        <label>Task Name:</label>
        <input type="text" name="task_name" required>

        <label>Description:</label>
        <textarea name="description"></textarea>

        <label>Status:</label>
        <select name="status">
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
        </select>

        <label>Due Date:</label>
        <input type="date" name="due_date">

        <button type="submit">Save Task</button>

        <a href="/" class="back">Cancel</a>
    </form>

</div>

</body>
</html>