<?php
namespace Tigo\Lottery\Game;

/**
 * Mounting: Random number generator for lottery games
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
abstract class Mounting 
{
     
     /**
      * ticket
      *
      * @var array
      */
     protected $ticket = []; 
     
     /**
      * make
      *
      * @param  int $min
      * @param  int $max
      * @param  int $scorer
      * @param  int $quantity
      * @return array
      */
     protected function make($min, $max, $scorer, $quantity)
     {
         for($i = 0; $i < $quantity; $i++){
            if(!isset($this->ticket[$i]))
                $this->ticket[$i] = []; 
            for($j = 0; $j < $scorer; $j++){ 
                $value = rand($min, $max);
                if(!in_array($value, $this->ticket[$i]))
                   $this->ticket[$i][$j] = str_pad($value,2,0,STR_PAD_LEFT);
                else
                   $this->ticket[$i][$j] = $this->generateNewNumber($min, $max, $value, $this->ticket[$i]);
            }
            asort($this->ticket[$i]);
         }
         return $this->ticket;
     }
               
     /**
      * generate new number
      *
      * @param  int $min
      * @param  int $max
      * @param  int $value
      * @param  array $array
      * @return int
      */
     private function generateNewNumber($min, $max, $value, array $array)
     {
         while(in_array($value, $array)){
            $value = rand($min, $max);
         }     
         return str_pad($value,2,0,STR_PAD_LEFT);
     } 

}