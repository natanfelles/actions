<?php declare(strict_types=1);
/*
 * This file is part of Actions Test Project.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Class Foo.
 */
class Foo
{
    public function bar(int $var) : string
    {
        if ($var === 300) {
            return 'Sparta!'; // Ok.
        }
        if (false !== (bool) $var) {
            return 'Mamamia';
        }
        // É coisa boa, é coisa boa
        return 'Xurupita';
    }
}
