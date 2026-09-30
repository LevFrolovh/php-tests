<?php

function capitalize(string $text): string
{
    if ($text === '') {
        return '';
    }
    return ucfirst($text);
}