<?php

namespace App\Service\MovieRecommendation\Algorithm;

class RandomRecommendationAlgorithm implements RecommendationAlgorithmInterface
{
    private const LENGHT = 3;

    public function recommend(array $movies): array
    {
        shuffle($movies);
        return array_slice($movies, 0, self::LENGHT);
    }

}