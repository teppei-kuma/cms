<?php
namespace App\Controller;

class TestController extends AppController {
    function view($key) {
        debug($key);
    }
}