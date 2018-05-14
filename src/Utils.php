<?php

namespace erratbi\Payzone;

class Utils {

  public static function deprecation_error($message) {
    trigger_error($message, version_compare(phpversion(), '5.3.0', '<') ? E_USER_NOTICE : E_USER_DEPRECATED);
  }
}