# Application: Movie Recommendations

## Project Description

The application is used for filtering movie titles (path to file: `app/data/movies.php`) according to 3 algorithms:
* Three random titles are returned.
* All movies starting with the letter 'W' are returned, but only if they have an even number of characters in the title.
* All titles consisting of more than one word are returned.

## Installation

To install the application, follow these steps:

1. Make sure you have Docker installed on your system.
2. Copy the project `movie_recommendations` to your application directory
3. Open the console and navigate to the application directory where you copied application
4. Run the following command in the console to install and start the application: `make install` (See `Makefile` for more usefull command.)
5. Once the installation is complete, the application will be available on local command line `make sh`.
6. You can start the application from the command line (cli): `make app-run` and see the results.
7. You can run test: `make app-test` and see the results.

You can manually install the project on your own env. without using Docker and Make, but remember to run the `composer install` command.

## Requirements

This application is built using the following technologies and requirements:
* PHP ^8.2
* No additional libraries are required, except for PHPUnit, which is used for unit testing.