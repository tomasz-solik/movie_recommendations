sh:
	docker exec -it movie-recommendations-app /bin/bash

u:
	docker compose up -d

d:
	docker compose down

du:
	@make d
	@make u

build:
	docker compose build

composer-install:
	docker exec -it movie-recommendations-app sh -c "composer install"
composer-update:
	docker exec -it movie-recommendations-app sh -c "composer update"

install:
	@make build
	@make u
	@make composer-install
	@make composer-update
	@echo "The installation was successful. Now you have access to the container via the CLI with the 'make sh' command"

app-test:
	docker exec -it movie-recommendations-app sh -c "php vendor/phpunit/phpunit/phpunit"

app-run:
	docker exec -it movie-recommendations-app sh -c "php cli/movie_recommendations.php"
