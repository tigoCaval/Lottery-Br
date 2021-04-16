<?php
namespace Tigo\Lottery\Factories;

use Tigo\Lottery\Interfaces\FlexibleInterface;
use Tigo\Lottery\Creator\LotteryPatternCreator;

/**
 * LotteryPatternFactory
 * 
 */
class LotteryPatternFactory extends LotteryPatternCreator
{    
    /**
     * Get factoryMethod
     *
     * @param  FlexibleInterface $game
     * @param  int $min
     * @param  int $max
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    protected function factoryMethod(FlexibleInterface $game, $min, $max, $scorer, $quantity)
    {
        return $game->create($min, $max, $scorer, $quantity);  
    }
}