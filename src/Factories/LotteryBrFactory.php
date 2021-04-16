<?php
namespace Tigo\Lottery\Factories;

use Tigo\Lottery\Creator\LotteryBrCreator;
use Tigo\Lottery\Interfaces\GameInterface;

/**
 * LotteryBrFactory: lottery games factory in Brazil
 * 
 */
class LotteryBrFactory extends LotteryBrCreator
{
        
    /**
     * Get factoryMethod
     *
     * @param  GameInterface $game
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    protected function factoryMethod(GameInterface $game, $scorer, $quantity)
    {
       return $game->create($scorer, $quantity);
    }
}