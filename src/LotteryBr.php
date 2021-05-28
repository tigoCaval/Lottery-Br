<?php
namespace Tigo\Lottery;

use Tigo\Lottery\Factories\LotteryBrFactory;
use Tigo\Lottery\Game\Br\MegaSena;
use Tigo\Lottery\Game\Br\Quina;
use Tigo\Lottery\Game\Br\LotoFacil;
use Tigo\Lottery\Game\Br\LotoMania;
use Tigo\Lottery\Game\Br\SuperSete;

/**
 * LotteryBr
 *
 * @package lottery 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class LotteryBr
{
    
    /**
     * method
     *
     * @var LotteryBrFactory
     */
    protected $method;
    
    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->method = new LotteryBrFactory();
    }
    
    /**
     * Get megaSena
     *
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    public function megaSena($scorer, $quantity)
    {
        return $this->method->doFactory(new MegaSena(), $scorer, $quantity);
    }
    
    /**
     * Get quina
     *
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    public function quina($scorer, $quantity)
    {
        return $this->method->doFactory(new Quina(), $scorer, $quantity);
    }
    
    /**
     * Get lotoFacil
     *
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    public function lotoFacil($scorer, $quantity)
    {
        return $this->method->doFactory(new LotoFacil(), $scorer, $quantity);
    }
    
    /**
     * Get lotoMania
     *
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    public function lotoMania($scorer, $quantity)
    {
        return $this->method->doFactory(new LotoMania(), $scorer, $quantity);
    }
    
    /**
     * Get superSete
     *
     * @param  int $scorer
     * @param  int $quantity
     * @return array
     */
    public function superSete($scorer, $quantity)
    {
        return $this->method->doFactory(new SuperSete(), $scorer, $quantity);
    }
       
}