<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Cache\Backend\Redis;

use UnitTester;

/**
 * Class GetLifetimeCest
 */
class GetLifetimeCest
{
    /**
     * Tests Phalcon\Cache\Backend\Redis :: getLifetime()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cacheBackendRedisGetLifetime(UnitTester $I)
    {
        $I->wantToTest('Cache\Backend\Redis - getLifetime()');
        $I->skipTest('Need implementation');
    }
}
