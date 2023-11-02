<?php

namespace App\Service\MovieRecommendation;

use App\Service\MovieRecommendation\Algorithm\RecommendationAlgorithmInterface;

class MovieRecommendationService implements MovieRecommendationServiceInterface
{

    public function __construct(
        private readonly array $movies,
    )
    {
    }

    public function getRecommendations(RecommendationAlgorithmInterface $algorithm): array
    {
        return $algorithm->recommend($this->movies);
    }

}