<?php

namespace erratbi\Payzone\Facades;

use Illuminate\Support\Facades\Facade;

class Payzone extends Facade {
    public static function getFacadeAccessor() {
        return 'erratbi-payzone';
    }
}