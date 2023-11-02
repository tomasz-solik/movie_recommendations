<?php

namespace Service\MovieRecommendation\Algorithm;

use App\Service\MovieRecommendation\Algorithm\LetterRecommendationAlgorithm;
use PHPUnit\Framework\TestCase;

class LetterRecommendationAlgorithmTest extends TestCase
{
    private LetterRecommendationAlgorithm $algorithm;

    protected function setUp(): void
    {
        $this->algorithm = new LetterRecommendationAlgorithm();
    }

    public function testRecommendReturnsMoviesWithStartsLetterW()
    {
        $movies = ['Pulp Fiction', 'Incepcja', 'Milczenie owiec', 'Wyspa tajemnic', 'Whiplash'];

        $recommendations = $this->algorithm->recommend($movies);

        $this->assertCount(2, $recommendations);
        $this->assertContains('Wyspa tajemnic', $recommendations);
        $this->assertContains('Whiplash', $recommendations);
    }

    public function testRecommendIgnoresMoviesWithoutStartsLetterWOrNotModulo2Count()
    {
        $movies = ['Wielki Gatsby', 'Lśnienie', 'Truman Show'];

        $recommendations = $this->algorithm->recommend($movies);

        $this->assertCount(0, $recommendations);
    }

}