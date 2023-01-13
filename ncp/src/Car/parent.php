<?php

class SmartPhone {
    public function Hello() {

        return "hello";
    }
}


class Android extends SmartPhone {
public function Hello() {
    $v = parent::hello();

    return $v."android";
}
}
$android = new Android();
echo $android->Hello();

?>