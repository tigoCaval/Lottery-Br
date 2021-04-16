<?php
namespace Tigo\Lottery\Interfaces;

interface FlexibleInterface
{
    public function create($min, $max, $scorer, $quantity);
}