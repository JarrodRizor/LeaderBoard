<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ScoresController;
use Excel;

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
        Excel::create('LeaderBoard Data', function($excel) {

            $excel->sheet('Excel sheet', function($sheet) {
                $sheet->setOrientation('landscape');
                $sheet->fromArray($this->getScoresData());
            });

        })->export('csv');
    }
}


