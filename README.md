# Number generator for lottery games
Main lottery games in Brazil (Mega-Sena, Quina, Lotomania and Lotofácil), random number generator.

You also have the option to create your own game
- This package can be used with any PHP application or Frameworks/PHP.
- Download package: ```composer require tigo/lottery```
- MIT license. ***Feel free to use this project***. ***Leave a star :star: or make a fork !***

*If you found this project useful, consider making a donation to support the developer.* 

[![paypal](https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate/?hosted_button_id=4XKSCN658G2WU)
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate?hosted_button_id=E84APX2Q5Y6XE)


## Introduction
Somewhere in your project, you may need to use autoload
 ```php
 include __DIR__ ."/vendor/autoload.php";
 ```
Example: using the number generator for lottery games in Brazil
 ```php
  use Tigo\Lottery\LotteryBr; //import class
  
  $game = new LotteryBr();
  
  /**
    First parameter: Choose the number of numbers you want to play.
    Second parameter: Number of tickets you want to play.
    return: array [][].
  **/
  $game->megaSena(6,2)
  $game->quina(5,2)
  $game->lotoFacil(15,2);
  $game->lotoMania(50,2);
 ```
