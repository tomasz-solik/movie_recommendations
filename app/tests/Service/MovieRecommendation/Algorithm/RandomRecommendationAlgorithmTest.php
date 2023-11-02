<?php

namespace Service\MovieRecommendation\Algorithm;

use App\Service\MovieRecommendation\Algorithm\RandomRecommendationAlgorithm;
use PHPUnit\Framework\TestCase;

class RandomRecommendationAlgorithmTest extends TestCase
{
    private RandomRecommendationAlgorithm $algorithm;
    private array $movies;

    protected function setUp(): void
    {
        $this->algorithm = new RandomRecommendationAlgorithm();
        $this->movies = ["Movie1", "Movie2", "Movie3", "Movie4", "Movie5"];
    }

    public function testRecommendReturnsThreeRandomMovies()
    {
        $recommendations = $this->algorithm->recommend($this->movies);
        $this->assertCount(3, $recommendations);
    }

    public function testRecommendReturnsSubsetOfInputArray()
    {
        $recommendations = $this->algorithm->recommend($this->movies);
        foreach ($recommendations as $recommendation) {
            $this->assertContains($recommendation, $this->movies);
        }
    }
}