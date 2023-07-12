<x-app-layout>
    <div class="py-12">

<!DOCTYPE html>
<html>
<head>
    <title>Garbage Collector</title>
    <style>
        .garbage-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .garbage-table th, .garbage-table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .garbage-table th {
            background-color: #f2f2f2;
        }

        .status-action {
            display: flex;
            align-items: center;
        }

        .status-input {
            flex-grow: 1;
            padding: 5px;
        }

        .update-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        h1{
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Garbage Collector</h1>

<table class="garbage-table">
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Name</th>
        <th>Time</th>
        <th>City</th>
        <th>Message</th>
        <th>Action</th>
    </tr>
    @foreach ($pendingOperations as $operation)
        <tr>
            <td>{{ $operation->id }}</td>
            <td>{{ $operation->date }}</td>
            <td>{{ $operation->cname }}</td>
            <td>{{ $operation->time }}</td>
            <td>{{ $operation->city }}</td>
            <td>{{ $operation->message }}</td>
            <td>
                <form action="{{ route('updateStatus', ['id' => $operation->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="status-action">
                        <input type="text" name="status" value="{{ $operation->status }}" class="status-input">
                        <button type="submit" class="update-button">Update</button>
                    </div>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
</div>
</x-app-layout>
