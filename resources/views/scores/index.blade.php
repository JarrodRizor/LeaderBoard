@extends("master")

@section("content")

    <form method="post" action="{{ url("scores") }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input name="name" placeholder="full name" class="form-control">
        </div>
        <div class="form-group">
            <input name="score" placeholder="score" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>


    @foreach($scores as $score)
        <p>{{ $score->name }}
            <span>Scores: {{ $score->score }}</span>
        </p>
    @endforeach
@stop