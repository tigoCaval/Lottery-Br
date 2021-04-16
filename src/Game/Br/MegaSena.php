<?php
namespace Tigo\Lottery\Game\Br;

use Tigo\Lottery\Game\Mounting;
use Tigo\Lottery\Interfaces\GameInterface;

/**
 * Game rules (lottery of Brazil)
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class MegaSena extends Mounting implements GameInterface
{

    const MIN = 1;
    const MAX = 60;
    const SCORER_MIN = 6; 
    const SCORER_MAX = 15; 
    const LIMIT_MIN = 1; //minimum number of lottery tickets.  
    const LIMIT_MAX = 100; //maximum number of lottery tickets.
    
    /**
     * create
     *
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    public function create($scorer, $quantity)
    {
        if($scorer >= self::SCORER_MIN && $scorer <= self::SCORER_MAX && $quantity <= self::LIMIT_MAX && $quantity >= self::LIMIT_MIN)
            return $this->make(self::MIN, self::MAX, $scorer, $quantity);
        else if($quantity <= self::LIMIT_MAX && $quantity >= self::LIMIT_MIN) 
            return $this->make(self::MIN, self::MAX, self::SCORER_MIN, $quantity);   
        else
            return [];
    }
  

}