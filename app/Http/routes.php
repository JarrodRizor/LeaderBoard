<?php

Route::get("/", "ScoresController@create");
Route::resource("scores", "ScoresController");