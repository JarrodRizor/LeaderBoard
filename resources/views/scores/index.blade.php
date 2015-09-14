@extends("master")

@section("content")
    @foreach($scores as $score)
        <p>{{ $score->name }}
            <span>Scores: {{ $score->score }}</span>
        </p>
    @endforeach
@stop