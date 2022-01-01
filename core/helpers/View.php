<?php

namespace Core\Helpers;

class View
{
  public $saveData = [];

  public function render(string $template, array $data = null)
  {
    if ($data !== null) {
      $this->saveData = $data;
      extract($this->saveData);
    }
    require_once __LOADFILE__ . "/views/" . $template . ".php";
    return $this;
  }

  public function include(string $templateDir, array $data = null)
  {
    if ($data !== null) {
      extract($data);
    } else {
      extract($this->saveData);
    }

    return require_once __LOADFILE__ . "/views/" . $templateDir . ".php";
  }
}
