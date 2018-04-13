@extends('plants.layout')
@section('title', 'Edit')
@section('content')
<div class="container">
    <p><a href="{{ route('plants.show', $plant) }}">&larr; Back to {{ $plant->species }}</a></p>
    <h1>Edit me</h1>

    <form action="{{ route('plants.update', $plant) }}" method="POST">
    @method('PUT')
    @include('plants.partials.form-fields', ['buttonText' => 'Submit edits'])
    </form>
</div>
@endsection
