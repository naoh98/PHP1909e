<?php
namespace Utilities\Payment;
//include_once "Traits/momo.php";
//include_once "Traits/napas.php";

use Traits\Momo;
use Traits\Napas;

class Payment{
    use Momo, Napas;

    public function demo(){
        echo "<br>" .__METHOD__;
    }
}