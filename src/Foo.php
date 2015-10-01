<?php namespace Foo;

use Hello\World;
class Foo
{
    public function baz()
    {
        return true;
    }

    public function foo()
    {
        $some = "changes";
        $what = TRUE;

        $hey = function () {
            return false;
        };
    }
    function poop() {}

    function SoBad(){
        return "this isn't right";
    }
}