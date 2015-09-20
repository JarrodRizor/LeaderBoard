@extends("master")

@section("content")

    <h2>Add new Score</h2>
    <form method="post" action="{{ url("scores") }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input name="name" placeholder="full name" class="form-control">
        </div>
        <div class="form-group">
            <input name="score" placeholder="score" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Add User and Score" class="btn btn-primary form-control">
        </div>
    </form>

    <!-- Check for errors -->
    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

    <h2>Leaderboard</h2>
    <!-- Loop Scores -->
    @foreach($scores as $score)
        <p>{{ $score->name }}
            <span>Scores: {{ $score->score }}</span>
        </p>
    @endforeach
@stop