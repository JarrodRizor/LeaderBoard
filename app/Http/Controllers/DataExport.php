<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use SimpleExcel\SimpleExcel;
use App\Http\Controllers\ScoresController;

class DataExport extends Controller
{
    /**
     * Exports content as csv file
     *
     * Reads ScoreController json and saves csv file
     */
    public function exportCSV(){
        $scoreController = new ScoresController();
        $data = json_decode($scoreController->index(), true);
        $excel = new SimpleExcel('csv');
        $excel->writer->setData($data);
        $excel->writer->saveFile('scores');
    }
}
