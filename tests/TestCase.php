<?php

namespace Creekmore108\LBlock\Tests;

use Creekmore108\LBlock\LBlockServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LBlockServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        include_once __DIR__ . '/migrations/create_users_table.php';

        (new \CreateUsersTable)->up();
    }
}
