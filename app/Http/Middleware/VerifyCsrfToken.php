<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
  /**
   * URI, которые надо исключить из CSRF-проверки.
   *
   * @var array
   */
  protected $except = [
    'http://192.168.2.10/tests',
  'http://192.168.2.10/login',
  'http://192.168.2.10/storeFile'
  ];
}
