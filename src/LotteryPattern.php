<?php
namespace Tigo\Lottery;

use Tigo\Lottery\Game\Prototype\MakeGame;
use Tigo\Lottery\Factories\LotteryPatternFactory;

/**
 * LotteryPattern
 *
 * @package lottery  
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class LotteryPattern
{
        
    /**
     * method
     *
     * @var LotteryPatternFactory
     */
    protected $method;
    
    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->method = new LotteryPatternFactory();
    }
    
    /**
     * Get makeGame
     *
     * @param  int $min
     * @param  int $max
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    public function makeGame($min, $max, $scorer, $quantity)
    {
       return $this->method->doFactory(new MakeGame(), $min, $max, $scorer, $quantity);
    }

}