<?php
namespace Tigo\Lottery\Game\Prototype;

use Tigo\Lottery\Game\Mounting;
use Tigo\Lottery\Interfaces\FlexibleInterface;

/**
 * Make a flexible game: Create your own game rule
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class MakeGame extends Mounting implements FlexibleInterface
{

    const LIMIT = 100;
        
    /**
     * create
     *
     * @param  int $min
     * @param  int $max
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    public function create($min, $max, $scorer, $quantity)
    {
        return  $quantity <= self::LIMIT ? $this->make($min, $max, $scorer, $quantity) : [];
    }
 

}