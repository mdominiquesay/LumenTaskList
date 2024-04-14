

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
    </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->task }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection