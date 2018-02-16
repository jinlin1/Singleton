<?php

class Single {

  private static $instance;

  protected function __construct() {}

  public static function instance() {

    if(self::$instance == null) {
      self::$instance = new Single;
    }

    return self::$instance;
  }

}

?>
