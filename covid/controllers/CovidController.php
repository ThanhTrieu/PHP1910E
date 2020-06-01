<?php
$method = $_GET['c'] ?? 'index';
switch ($method) {
	case 'index':
		index();
		break;
	case 'handle':
		handle();
		break;
	case 'movie':
		movie();
		break;
}

function movie()
{
	$nameFilm = $_GET['keyword'] ?? '';
	require '../services/movie.php';
	$movie = getDataFilmFromApi($nameFilm);
	print_r($movie);
	
}

function index()
{
	// nap vao 1 view
	// require 'views/covid/index_view.php';
	require 'views/movie/index_view.php';
}

function handle()
{
	require '../services/api.php';
	
	$result = getDataVirusCorona();
	if(is_array($result)){
		require '../views/covid/covid_view.php';
	} else {
		echo "<h3 class='text-center'>can not access api</h3>";
	}
}