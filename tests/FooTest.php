<?php

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testBar()
    {
        $foo = new Foo();
        self::assertSame('Xurupita', $foo->bar(24));
    }
}
