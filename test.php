<?php

echo 'Test';

class Mag
{
    public function poorlyFormatted(array $params = [])
    {
        $r = '1';
        echo $r;
    }
}

$m = new Mag();
$m->poorlyFormatted();
