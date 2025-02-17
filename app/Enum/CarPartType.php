<?php

namespace App\Enums;

enum CarPartType: string
{
    case ENGINE = 'engine';
    case TRANSMISSION = 'transmission';
    case BRAKES = 'brakes';
    case ELECTRICAL = 'electrical';
    case BODY = 'body';
}