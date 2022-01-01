<?php

namespace Lib;

use Rakit\Validation\Validator;

class Validation extends Validator
{
  /**
   * Setting your validation with Rakit Validation
   * ---
   * see more documentation: https://github.com/rakit/validation
   */
  function __construct()
  {
    /**
     * example: custom messages for validator
     */
    parent::__construct([
      'required' => "Kolom :attribute masih kosong!",
      'email' => "Email tidak valid!",
    ]);
  }
}
