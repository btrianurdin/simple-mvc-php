<?php

namespace Model;

use Config\Database;

class BaseModel
{
  protected static $_DB;

  public static function DB()
  {
    self::$_DB = (new Database())->Connect();
    return self::$_DB;
  }

  public static function ID()
  {
    return self::$_DB->id();
  }
}
