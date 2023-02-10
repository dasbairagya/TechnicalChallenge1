# PHP Standard Application to create the simple card game

> This application is used to check if the drawn hand contains a straight or a straight flush based on high to low or vice versa.

![localhost-8000](https://user-images.githubusercontent.com/18226897/217870935-b6d23455-6d4f-4738-a762-6367e27c5537.png)

## Requirements (Prerequisites)

Below tools and packages are required to successfully install this project.

- PHP version >=7.0.12
- Composer - PHP dependency manager [Install](https://getcomposer.org/doc/00-intro.md)
- Phpunit version ^9.0 [Install](https://phpunit.de/getting-started/phpunit-9.html)
- PHP Documentor - Generate phpcdocs for the project [Install](https://www.phpdoc.org/)

## Configuration

Define suits and cards in `config/app.ini`.

To start using Composer in your project, all you need is a `composer.json` file. This file describes the dependencies of your project and may contain other metadata as well.

For a complete list of the available Shopware-related types see the [Composer.json Schema](https://getcomposer.org/doc/04-schema.md).

## Installation

A step by step list of commands / guide that will generate vendor directory and autoload file and install all the dependencies for the project mentioned in `composer.json` file.

From the project's root directory run:

    1. $ composer install

## Running the application

     $ php index.php

     or you can start the local server via
     php -S localhost:8000

The above commands will run the application using PHP/CLI.

## Important files and directories

### `/config`

One of the directories moved to the git root is `/config`. This directory holds Projects's `.ini` configuration files. The config file is autoloaded via `composer.json`'s `files` array.
`"files": ["config/config.php"]`

### `/src`

This is the main project folder which contains all the logical files/classes and being autoloaded via `composer.json`'s `psr-4` object facilitating the namespacing feature.

```json
"psr-4": { "App\\": "src/"}
```

### `/tests`

This directory have some test to run and contains the code coverage report inside `/reports` dir.

### `/docs`

This directory is used for documentaion purpuse generated via phpDocumentor

### `phpunit.xml`

The attributes of the `<phpunit>` element can be used to configure PHPUnit’s core functionality and it is written
in `phpunit.xml` file which is the configuration file for unittesting. It can be generated via

    $ vendor/bin/phpunit --generate-configuration

## Running the unit tests

Describe and show how to run the tests with code examples. Explain how to run the automated tests for this system. Below command is used to run the unit test:

    $ vendor/bin/phpunit

To run unit test for a specific class/method:

    $ vendor/bin/phpunit --filter "<test class name here>"
    $ vendor/bin/phpunit --filter "<test method name here>"

e.g.

    $ vendor/bin/phpunit --filter "UtilityTest"
    $ vendor/bin/phpunit --filter "isFlush"

## Generate code coverage report

Code coverage is a metric that can help you understand how much of your source is tested. It's a very useful metric that can help you assess the quality of your test suite.

![Utility-php](https://user-images.githubusercontent.com/18226897/217869334-01321319-f88c-4ff3-b7e1-c394b8251ed0.png)

To generate code coverage report

    $ vendor/bin/phpunit --coverage-html ./tests/reports

## Generate PHP Documentation

Below command is used to generate PHP Documentation and it is stored in "docs" folder (Run the index.html file on browser to see the application documentation)

    $ vendor/bin/phpdoc -d ./src -t ./docs

Note: You can ignore any directory using `--ignore` flag

e.g.

    $ vendor/bin/phpdoc -d ./src -t ./docs --ignore "vendor/, tests/"
    $ vendor/bin/phpdoc -d . -t ./docs --ignore "vendor/"
