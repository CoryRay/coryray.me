@extends('plants.layout')
@section('title', 'Add to Garden')
@section('content')
<div class="container">
    <form action="/plants" method="POST">
    @include('plants.partials.form-fields', ['buttonText' => 'Add to garden'])
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection

