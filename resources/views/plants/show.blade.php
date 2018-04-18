@extends('plants.layout')
@section('title', 'Show')
@section('content')
<div class="container">
    <p><a href="{{ route('plants.index') }}">&larr; Back</a></p>
    <h1>{{ $plant->species }}</h1>
    <p><a href="{{ route('plants.edit', $plant) }}">edit</a></p>
    <dl>
        <dt>added</dt>
        <dd>{{ $plant->created_at }}</dd>

        <dt>common name</dt>
        <dd>{{ $plant->common_name }}</dd>

        <dt>nickname</dt>
        <dd>{{ $plant->nickname }}</dd>

        <dt>location</dt>
        <dd>{{ $plant->location }}</dd>

        <dt>comment</dt>
        <dd>{{ $plant->comment }}</dd>
    </dl>

    <h2>previous waterings</h2>

    <form action="{{ route('waterings.store') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="plant_id" value="{{ $plant->id }}">
        <button type="submit" class="water-button">I watered this</button>
    </form>
    <ol reversed>
    @foreach($plant->waterings as $watering)
    <li>{{ $watering->created_at->toFormattedDateString() }}</li>
    @endforeach
    </ol>
</div>


@endsection
