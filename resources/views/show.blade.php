

@extends('layout')
@section('content')
<table>
    <thead>
        <tr>
        <th>
            id
        </th>
        <th>name</th>
        <th>Task Name </th>
        <th>Action </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->task }}</td>
                <td>
                <form action="/edit/{{ $task->id }}" method="GET">
                    <button type="submit">Edit</button>
                </form>

                </td>
                <td>
                <form action="/delete/{{ $task->id }}" method="GET">
                    <button type="submit">Delete</button>
                </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection