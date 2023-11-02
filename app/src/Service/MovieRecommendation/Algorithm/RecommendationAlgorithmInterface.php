<?php

namespace App\Service\MovieRecommendation\Algorithm;

interface RecommendationAlgorithmInterface
{
    public function recommend(array $movies): array;

}