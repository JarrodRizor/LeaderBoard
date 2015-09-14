@extends("master")

@section("content")
    @foreach($score as $scores)
        <p>{{ $scores->name }}</p>
@stop