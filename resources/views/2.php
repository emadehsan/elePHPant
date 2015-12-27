<?php
class Ultra
{
    private $hello = "World";

    public function func()
    {
        echo $this->hello;
    }

}
$u = new Ultra;
$u->func();
?>