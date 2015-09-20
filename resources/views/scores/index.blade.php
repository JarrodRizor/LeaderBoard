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
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Score</th>
            <th>Delete</th>
        </tr>
    @foreach($scores as $index => $score)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $score->name }}</td>
                <td>{{ $score->score }}</td>
                <td><button class="btn-danger">Delete</button></td>
            </tr>
    @endforeach

    </table>
@stop