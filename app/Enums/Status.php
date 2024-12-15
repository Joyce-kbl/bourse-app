<?php

namespace App\Enums;

enum Status: string  {
    case INPROGRESS = "En cours";
    case APPROVED = "Approuvée";
    case REJECTED = "Rejétée";
}