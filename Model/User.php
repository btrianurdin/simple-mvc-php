<?php

namespace Model;

class User extends BaseModel
{
  public static function getWithId(array $userId)
  {
    self::DB()->select("user", $userId);
  }
}
