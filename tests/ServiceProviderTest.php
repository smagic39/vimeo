<?php

/*
 * This file is part of Laravel Vimeo.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Tests\Vimeo;

use GrahamCampbell\TestBench\Traits\ServiceProviderTestCaseTrait;

/**
 * This is the service provider test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTestCaseTrait;

    public function testVimeoFactoryIsInjectable()
    {
        $this->assertIsInjectable('Vinkla\Vimeo\Factories\VimeoFactory');
    }

    public function testVimeoManagerIsInjectable()
    {
        $this->assertIsInjectable('Vinkla\Vimeo\VimeoManager');
    }
}
