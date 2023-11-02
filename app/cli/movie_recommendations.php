<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Service\MovieRecommendation\Algorithm\LetterRecommendationAlgorithm;
use App\Service\MovieRecommendation\Algorithm\MultipleWordsRecommendationAlgorithm;
use App\Service\MovieRecommendation\Algorithm\RandomRecommendationAlgorithm;
use App\Service\MovieRecommendation\MovieRecommendationService;

// get movie titles from source
$movies = require __DIR__ . '/../data/movies.php';

$movieRecommendation = new MovieRecommendationService($movies);

$randomRecommendation = $movieRecommendation->getRecommendations(new RandomRecommendationAlgorithm());
var_dump(['random titles' => $randomRecommendation]);

$letterRecommendation = $movieRecommendation->getRecommendations(new LetterRecommendationAlgorithm());
var_dump(['letter `W` and modulo 2 title chars' => $letterRecommendation]);

$multipleWordsRecommendation = $movieRecommendation->getRecommendations(new MultipleWordsRecommendationAlgorithm());
var_dump(['multiple words' => $multipleWordsRecommendation]);
