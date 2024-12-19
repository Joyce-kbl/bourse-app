<?php

namespace App\Enums;

enum Level: string
{
  case BACHELOR = "Bachelor";
  case MASTER = "Master";
  case DOCTORATE = "Doctorate";

  public function label(): string
  {
    return match ($this) {
      self::BACHELOR => 'Licence',
      self::MASTER => 'Master',
      self::DOCTORATE => 'Doctorat',
    };
  }
}
