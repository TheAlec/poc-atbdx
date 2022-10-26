<?php

function isQuantityValid($quantity): bool
{
    return is_int($quantity) AND intval($quantity) >= 0;
}
