@extends('data.app')

@section('content')
    <h1 class="mb-4">Single Row</h1>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                @foreach ($columns as $column)
                    <th>{{ $column }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($row as $value)
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection
