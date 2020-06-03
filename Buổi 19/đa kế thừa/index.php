<?php
//Đa kế thừa trong php sử dụng trait


class ClassicPhone{
    public function Call(){
        echo "<br>Calling";
    }
    public function Mess(){
        echo "<br>SMS";
    }
}

trait Computer{
    public function SendEmail(){
        echo "<br>Send Email";
    }
    public function PlayGame(){
        echo "<br>Play Game";
    }
    public function Office(){
        echo "<br>Office";
    }
}

trait Radio{
    public function NgheRadio(){
        echo "<br>Listen to the Radio";
    }
}

trait Camera{
    public function ChupAnh(){
        echo "<br>Take a photo";
    }
}
class SmartPhone extends ClassicPhone{
    use Camera,Computer,Radio;
}

$iphone = new SmartPhone();
$iphone->Call();
$iphone->Mess();
$iphone->NgheRadio();
$iphone->PlayGame();