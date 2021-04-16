<?php
namespace Tigo\Lottery\Creator;

use Tigo\Lottery\Interfaces\FlexibleInterface;

/**
 * LotteryPatternCreator
 */
abstract class LotteryPatternCreator
{   
     
    /**
     * factoryMethod
     *
     * @param  FlexibleInterface $game
     * @param  int $min
     * @param  int $max
     * @param  int $scorer
     * @param  int $quantity
     * @return void
     */
    protected abstract function factoryMethod(FlexibleInterface $game, $min, $max, $scorer, $quantity);
    
    /**
     * doFactory
     *
     * @param  mixed $method
     * @param  int $min
     * @param  int $max
     * @param  int $scorer
     * @param  int $quantity
     * @return void
     */
    public function doFactory($method, $min, $max, $scorer, $quantity)
    {
       return $this->factoryMethod($method, $min, $max, $scorer, $quantity); 
    }

}