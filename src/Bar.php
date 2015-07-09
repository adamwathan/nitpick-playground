<?php namespace Foo;

class Bar {
    public function baz() {
        return true;
    }

    public function foo() {
        $hey = function()
        {
            return true;
        };
    }
}
