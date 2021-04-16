<?php
namespace Tigo\Lottery\Creator;

use Tigo\Lottery\Interfaces\GameInterface;


/**
 * LotteryBrCreator
 */
abstract class LotteryBrCreator
{

  
  /**
   * factoryMethod
   *
   * @param  GameInterface $game
   * @param  int $scorer
   * @param  int $quantity
   * @return void
   */
  protected abstract function factoryMethod(GameInterface $game, $scorer, $quantity);

   
  /**
   * doFactory
   *
   * @param  mixed $method
   * @param  int $scorer
   * @param  int $quantity
   * @return void
   */
  public function doFactory($method, $scorer, $quantity)
  {
     return $this->factoryMethod($method, $scorer, $quantity); 
  }

    
}