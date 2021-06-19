<?php

function highlightSearch($input, $searchString)
{
    return str_replace($searchString, "<mark>$searchString</mark>", $input);
}
