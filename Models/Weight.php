<?php

trait Weight
{
    public $weight;

    function setWeight($_weight)
    {
        $this->weight = $_weight;
    }
    function getWeight()
    {
        return $this->weight;
    }
}