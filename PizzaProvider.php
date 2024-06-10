<?php

namespace App\Faker\Provider;

use Faker\Provider\Base as BaseProvider;

class PizzaProvider extends BaseProvider {

  protected static $pizzas = [
    'Margherita',
    'Quatre Saisons',
    'Reine',
    'Napolitaine',
    'Capricciosa',
    'Diavola',
    'Calzone',
    'Quatre Fromages',
    'Hawaïenne',
    'Végétarienne',
    'Fruits de Mer',
    'Prosciutto',
    'Rustica',
    'Tartiflette',
    'Savoyarde',
    'Bolognaise',
    'Carbonara',
    'Normande',
    'Chèvre Miel',
    'Parmigiana',
    'Pepperoni',
    'Mexicaine',
    'Orientale',
    'Alsacienne',
    'Indienne',
    'Kebab',
    'Forestière',
    'Sicilienne',
    'Périgourdine',
    'Gourmande'
  ];

  protected static $categories = [
    'Classiques',
    'Végétariennes',
    'Épicées',
    'Gourmandes',
    'Italiennes',
    'Américaines',
    'Fruit de Mer',
    'Fromages',
    'Carnivores',
    'Poulet',
    'Exotiques',
    'BBQ',
    'Deluxe',
    'Blanches',
    'Saisonnales'
  ];
  
  protected static $ingredients = [
    'Sauce tomate',
    'Mozzarella',
    'Pepperoni',
    'Champignons',
    'Oignons',
    'Saucisse',
    'Bacon',
    'Olives noires',
    'Poivrons verts',
    'Ananas',
    'Épinards',
    'Ail',
    'Basilic',
    'Parmesan',
    'Poulet',
    'Sauce barbecue',
    'Jambon',
    'Jalapenos',
    'Artichauts',
    'Tomates séchées',
    'Roquette',
    'Thon',
    'Chorizo',
    'Capres',
    'Crevettes',
    'Courgettes',
    'Ricotta',
    'Feta',
    'Gorgonzola',
    'Provolone',
    'Champignons de Paris',
    'Olives vertes',
    'Pancetta',
    'Lardons',
    'Poivrons rouges',
    'Aubergines',
    'Salami',
    'Huile d\'olive',
    'Piment d\'Espelette',
    'Miel',
    'Figues',
    'Truffes',
    'Oeufs',
    'Anchois',
    'Fromage de chèvre',
    'Roquefort',
    'Taleggio',
    'Poireaux',
    'Pommes de terre'
  ];

  public function pizzaName() {
    return "Pizza " . static::randomElement(static::$pizzas);
  }

  public function category() {
    return static::randomElement(static::$categories);
  }

  public function ingredients() {
    return static::randomElement(static::$ingredients);
  }
}