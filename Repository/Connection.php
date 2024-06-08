<?php

namespace Repository;

class Connection {
  public static function start() {
    echo 'Connection created';
  }

  public static function close() {
    echo 'Connection closed';
  }
}