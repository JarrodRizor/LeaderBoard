<?php

// Setup Restful routes and home page
Route::get("/", "ScoresController@create");
Route::resource("scores", "ScoresController");

// Get CSV data for Scores
Route::get("exportCSV", "DataExport@exportCSV");