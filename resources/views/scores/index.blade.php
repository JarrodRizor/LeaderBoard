@extends("master")

@section("content")

    <form method="post" action="{{ url("scores") }}">
        <div class="form-group">
            <input name="name" placeholder="full name" class="form-control">
        </div>
        <div class="form-group">
            <input name="score" placeholder="score" class="form-control">
        </div>
    </form>


    @foreach($scores as $score)
        <p>{{ $score->name }}
            <span>Scores: {{ $score->score }}</span>
        </p>
    @endforeach
@stop