<?php namespace Foo;

use Hello\World;
class Foo {
    public function baz()
    {
        return true;
    }

    public function foo()
    {
        $what = TRUE;

        $hey = function()
        {
            return FALSE;
        };
    }

    function SoBad(){
        return "this isn't right";
    }
}
