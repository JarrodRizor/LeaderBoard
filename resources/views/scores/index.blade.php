@extends("master")

@section("content")

    <h2>Add New Score</h2>
    <form method="post" action="{{ url("scores") }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input name="name" placeholder="full name" class="form-control">
        </div>
        <div class="form-group">
            <input name="twitter" placeholder="Twitter" class="form-control">
        </div>
        <div class="form-group">
            <input name="score" placeholder="score" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Add User and Score" class="btn btn-primary form-control">
        </div>
    </form>
    <hr>

    <!-- Check for errors -->
    @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            <p>{{ Session::get('flash_message') }}</p>
        </div>
    @endif

    <h2>Leaderboard</h2>
    <!-- Loop Scores -->
    <table class="table table-striped">
        <tr>
            <th>Place</th>
            <th>Name</th>
            <th>Twitter (optional)</th>
            <th>Score</th>
            <th>Delete</th>
        </tr>
    @foreach($scores as $index => $score)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $score->name }}</td>
                <td><a href="http://twitter.com/{{ $score->twitter }}" target="_blank">
                        <!-- Check if user has a twitter -->
                        @if($score->twitter)
                            {{"@" . $score->twitter }}</a>
                        @endif
                </td>
                <td>{{ $score->score }}</td>
                <td>
                    <form method="post" action="{{ url("scores/". $score->id) }} ">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="delete" class="btn-danger">
                    </form>
                </td>
            </tr>
    @endforeach

    </table>

    <a href="{{ url("exportCSV") }}">Download CSV</a>
@stop