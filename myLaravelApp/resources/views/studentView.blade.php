<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: rgb(171, 168, 168);
        }
    </style>
</head>
<body>
  
    <table>
        <caption><h1>Students List</h1></caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Section</th>
                <th>Roll Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student['id'] }}</td>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['sec'] }}</td>
                    <td>{{ $student['roll'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

  
</body>
</html>
