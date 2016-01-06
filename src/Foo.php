<?php namespace Foo;

use Hello\World;
class Foo
{
    public function baz()
    {
        return TRUE;
    }

    public function foo()
    {
        $what = TRUE;

        $hey = function () {
            return false;
        };
    }

    function dumb()
    {
        return FALSE;
    }

    function SoBad(){
        return "this isn't right";
    }
}
