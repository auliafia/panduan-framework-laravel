@extends('data.app')

@section('content')
    <h1 class="mb-4">Single Column</h1>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($column as $title)
                <tr>
                    <td>{{ $title }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
