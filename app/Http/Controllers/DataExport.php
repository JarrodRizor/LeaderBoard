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
     * Create an object for scores and convert it to an Array.
     *
     * @return Data
     */
    private function getScoresData()
    {
        $scoreController = new ScoresController();
        $data = json_decode($scoreController->index(), true);
        return $data;
    }

    /**
     * Save data as CSV
     */
    public function exportCSV()
    {
        $excel = new SimpleExcel('csv');
        $excel->writer->setData($this->getScoresData());
        $excel->writer->saveFile('scores');
    }
}
