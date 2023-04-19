<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Laravel</title>
    <style>
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"], textarea {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        
        button[type=submit] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button[type=submit]:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create </button>
    
</form>
</body>
</html>
