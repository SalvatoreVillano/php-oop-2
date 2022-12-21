<?php

function multiplication($int)
{
    if (!is_int($int)) {
        throw new Exception('Is not a number');
    }
    return $int * 5;
}

?>