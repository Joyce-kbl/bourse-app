<?php

namespace App\Enums;

enum Role: string  {
    case ADMIN = "Administrateur";
    case STUDENT = "Etudiant";
}