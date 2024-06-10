# faker-pizza provider for faker php

This package will allow fakerphp to generate random name for pizzas, pizza categories et ingredients for pizzas.

## Install

`composer require julien-dussaut/faker-pizza`

## Use

```php
<?php

use JulienDussaut\FakerPizza\PizzaProvider;

$faker = Factory::create();

// Adding the provider to fakerphp

$faker->addProvider(new PizzaProvider($faker));

// Generate a random pizza name

$pizza = $faker->pizzaName(); // Output : Pizza napolitaine

// Generate a random pizza category

$pizzaCategory = $faker->category(); // Output : Américaines

// Generate a random ingredient

$ingredient = $faker->ingredient(); // Output : Aubergines

```
