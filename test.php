<?php

echo 'Test';

function test() {
    return true;   
}

if(test()) {
    echo 'If formatting';
}

if (strlen('test')===4) {
    echo 'test if formatting 1';
}

if (strlen('test1')!=1&& array_key_exists('REMOTE_ADDR', $_SERVER)) {
    echo 'test if formatting 2';   
}

if (true) {
    echo 'r';
} elseif (strlen('t') == 1) {
    echo "b";
}
else {
    echo 'c';
}

class Ps {
    const badconstantname = 1;
    public function __construct(){
        $this->test=1;
    }
    public function linespacing()
    {
        echo 'test'; echo 'same line';
    }
    protected function closureTest($test) {
        return function() use ($test) { echo 'one line closure'; };
    }
    private function under_scores($test,$test2,$test3, $test4){
        $arr = [2,1,3,21,5,3];
        $ascArr = [
            'te'=>true,
            '2nd' => 4
        ];
    }
    function noVisibility() {
        echo '👀';   
    }
    public function whitespace()
    {
        echo 'test';
        
        
        
        
        
        
        
        
        
        
        
        
        
        echo 'whitespace';
        
        
        
        
        
    }
}
