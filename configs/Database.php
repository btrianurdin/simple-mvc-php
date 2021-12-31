<?php

namespace Config;

use Medoo\Medoo;
use PDO;

class Database
{
  // Database Host
  private $host = "localhost";
  
  // Database User
  private $user = "root";

  // Database Password
  private $password = "";

  // Database Name 
  private $dbName = "bakpiashop";

  // Database Port [optional]
  private $port = "3306";

  // Database Error Model [optional]
  // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
  private $err_mode = PDO::ERRMODE_SILENT;

  /**
   * ---------------------------
   * Instance database
   * Jangan merubah apapun 
   * ---------------------------
   */

  public $DB;

  public function __construct()
  {
    $this->DB = new Medoo([
      'type' => 'mariadb',
      'host' => $this->host,
      'database' => $this->dbName,
      'username' => $this->user,
      'password' => $this->password,
      'port' => $this->port,
      'error' => $this->err_mode
    ]);
  }

  public function Connect()
  {
    return $this->DB;
  }
}

