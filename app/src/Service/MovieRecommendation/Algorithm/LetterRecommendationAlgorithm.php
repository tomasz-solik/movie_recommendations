<?php

namespace App\Service\MovieRecommendation\Algorithm;

class LetterRecommendationAlgorithm implements RecommendationAlgorithmInterface
{
    private const TRIM = false;
    private const LETTER_STARTS_WITH = 'W';

    public function recommend(array $movies): array
    {
        return array_filter($movies, function ($movie) {
            if (self::TRIM) {
                $movie = preg_replace('/\s+/', '', $movie);
            }
            $movie = ucfirst($movie);
            return (str_starts_with($movie, self::LETTER_STARTS_WITH)) && (strlen($movie) % 2 === 0);
        });
    }
}