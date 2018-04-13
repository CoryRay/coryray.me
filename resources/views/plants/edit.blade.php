@extends('plants.layout')
@section('title', 'Edit')
@section('content')
<div class="container">
    <p><a href="{{ route('plants.show', ['plant' => $plant]) }}">&larr; Back to {{ $plant->species }}</a></p>
    <h1>Edit me</h1>

    <form action="/plants" method="POST">
    @include('plants.partials.form-fields', ['buttonText' => 'Submit edits'])
    </form>
</div>
@endsection
