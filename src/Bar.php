<?php namespace Foo;

class Bar {
    public function baz() {
        return true;
    }

    public function foo()
    {
        $foo = "bar";
        $hey = function() {
            return true;
        };
    }
}