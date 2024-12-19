<?php

namespace App\Enums;

enum Role: string
{
  case ADMIN = "admin";
  case STUDENT = "student";

  public function label(): string
  {
    return match ($this) {
      self::ADMIN => 'Administrateur',
      self::STUDENT => 'Etudiant',
    };
  }
}
