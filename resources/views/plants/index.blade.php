@extends('plants.layout')
@section('title', 'My Garden')
@section('content')
<div class="container">
    <p><a href="{{ route('plants.create') }}">add new</a></p>
    <h1>My Garden</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Species</th>
                <th>Location</th>
                <th>Last Water</th>
                <th>More</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plants as $plant)
            <tr>
                <td>{{ $plant->species }}</td>
                <td>{{ $plant->location }}</td>
                @if(count($plant->waterings))
                <td>{{ $plant->waterings[0]->created_at->toFormattedDateString() }}</td>
                @else
                <td></td>
                @endif
                <td><a href="{{ route('plants.show', ['plant' => $plant]) }}">Details</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
