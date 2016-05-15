<?php
namespace Foo;
use Hello\World;
class Foo {
    public function baz()
    {
        return FALSE;
    }

    public function foo()
    {
        $what = TRUE;

        $hey = function () {
            return false;
        };
    }

    function SoBad(){
        return "this isn't right";
    }
}