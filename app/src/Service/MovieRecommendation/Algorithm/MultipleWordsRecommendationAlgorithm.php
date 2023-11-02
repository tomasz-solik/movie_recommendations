<?php

namespace App\Service\MovieRecommendation\Algorithm;

class MultipleWordsRecommendationAlgorithm implements RecommendationAlgorithmInterface
{
    private const WORD_COUNT_MIN = 2;

    public function recommend(array $movies): array
    {
        return array_filter($movies, function ($movie) {
            return str_word_count($movie) >= self::WORD_COUNT_MIN;
        });
    }
}