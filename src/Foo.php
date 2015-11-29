<?php

use Hello\World;
class Foo
{
    public function baz()
    {
        if (true) return false;


        foreach (range(5, 10) as $i)
            {
                echo 'hello';
            }
    }

    public function foo()
    {
        $what = TRUE;

        $hey = function () {
            return false;
        };
    }
}
