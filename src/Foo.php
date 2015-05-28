<?php namespace Foo;

use Hello\World;
class Foo
{
    public function foo()
    {
        $what = FALSE;

        $hey = function () { return false; };
    }

    function SoBad(){
        return "this isn't right";
    }

    private function JustAsBad($params,  $are_bad, $too)
    {
        return FALSE;
    }

    private final function wrong_order($param)
    {
        return "this body is ok though";
    }
}
