<?php
/*
 * This file is part of Actions Test Project.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testBar() : void
    {
        // Tá chovendo aí? Aqui tá chovendo.
        $foo = new Foo();
        self::assertSame('Xurupita', $foo->bar(0));
        self::assertSame('Mamamia', $foo->bar(24));
    }
}
