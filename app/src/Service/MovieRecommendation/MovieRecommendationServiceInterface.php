<?php

namespace App\Service\MovieRecommendation;

use App\Service\MovieRecommendation\Algorithm\RecommendationAlgorithmInterface;

interface MovieRecommendationServiceInterface
{
    public function getRecommendations(RecommendationAlgorithmInterface $algorithm): array;

}