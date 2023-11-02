<?php

namespace Service\MovieRecommendation;

use App\Service\MovieRecommendation\Algorithm\RecommendationAlgorithmInterface;
use App\Service\MovieRecommendation\MovieRecommendationService;
use PHPUnit\Framework\TestCase;

class MovieRecommendationServiceTest extends TestCase
{
    private array $movies;

    public function setUp(): void
    {
        $this->movies = ['Movie1', 'Movie2', 'Movie3'];
    }

    public function testGetRecommendations()
    {
        $algorithm = $this->createMock(RecommendationAlgorithmInterface::class);

        $expectedRecommendations = ['Movie1', 'Movie2', 'Movie3'];
        $algorithm->expects($this->once())
            ->method('recommend')
            ->with($this->movies)
            ->willReturn($expectedRecommendations);

        $movieRecommendationService = new MovieRecommendationService($this->movies);

        $actualRecommendations = $movieRecommendationService->getRecommendations($algorithm);

        $this->assertEquals($expectedRecommendations, $actualRecommendations);
    }
}