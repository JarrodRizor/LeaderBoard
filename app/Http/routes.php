<?php

Route::get("/", "ScoresController@index");
Route::resource("scores", "ScoresController");