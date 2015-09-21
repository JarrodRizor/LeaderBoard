<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ScoreRequest;

class ScoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $scores = Score::orderBy('score', 'DESC')->limit(20)->get();
        return view("scores.index")->with("scores", $scores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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

        return redirect("scores");
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

        return redirect("scores");
    }

}
