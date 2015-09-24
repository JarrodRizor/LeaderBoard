<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ScoreRequest;
use Illuminate\Support\Facades\Session;

class ScoresController extends Controller
{
    protected $score;

    public function __construct()
    {
        return $this->score;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $scores = Score::orderBy('score', 'DESC')->limit(20)->get();
        return $scores;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("scores.index")->with("scores", $this->index());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ScoreRequest  $request
     * @return Response
     */
    public function store(ScoreRequest $request)
    {
        $data = $request->all();
        Score::create($data);

        Session::flash("flash_message", "User has been added");

        return $this->goHome();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $data = Score::findOrFail($id);
        $data->delete();

        Session::flash("flash_message", "User has been deleted");

        return $this->goHome();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function goHome()
    {
        return redirect("/");
    }

}
