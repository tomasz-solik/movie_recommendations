<?php

namespace Service\MovieRecommendation\Algorithm;

use App\Service\MovieRecommendation\Algorithm\MultipleWordsRecommendationAlgorithm;
use PHPUnit\Framework\TestCase;

class MultipleWordsRecommendationAlgorithmTest extends TestCase
{
    private MultipleWordsRecommendationAlgorithm $algorithm;

    protected function setUp(): void
    {
        $this->algorithm = new MultipleWordsRecommendationAlgorithm();
    }

    public function testRecommendReturnsMoviesWithMultipleWords()
    {
        $movies = ['One', 'Two Words', 'Three Words Words', 'Four Words Words Words'];

        $recommendations = $this->algorithm->recommend($movies);

        $this->assertCount(3, $recommendations);
        $this->assertContains("Two Words", $recommendations);
        $this->assertContains("Three Words Words", $recommendations);
        $this->assertContains("Four Words Words Words", $recommendations);
    }

    public function testRecommendIgnoresMoviesWithSingleWords()
    {
        $movies = ['Movies', 'With', 'Single', 'Words'];

        $recommendations = $this->algorithm->recommend($movies);

        $this->assertCount(0, $recommendations);
    }

}