<?php

namespace App\Enums;

enum Status: string
{
  case INPROGRESS = "in_progress";
  case APPROVED = "approved";
  case REJECTED = "Rejected";

  public function label(): string
  {
    return match ($this) {
      self::INPROGRESS => "En cours",
      self::APPROVED => 'Approuvée',
      self::REJECTED => 'Rejétée',
    };
  }
}
