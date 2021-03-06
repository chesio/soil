<?php

namespace Roots\Soil\Tests;

use Brain\Monkey;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as FrameworkTestCase;

use function Brain\Monkey\Functions\stubs;

class TestCase extends FrameworkTestCase
{
    use MockeryPHPUnitIntegration;

    protected function setUp()
    {
        Monkey\setUp();
        parent::setUp();

        stubs([
            'esc_attr',
            'esc_html',
            '__',
            '_x',
            'esc_attr__',
            'esc_html__',
        ]);
    }

    protected function tearDown()
    {
        Monkey\tearDown();
        parent::tearDown();
    }
}
