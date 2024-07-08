<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Providers\AppServiceProvider;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    // public function test_user(): void
    // {
    //     $user = (new AppServiceProvider())->test_user_data(1);
    //     $this->assertTrue(true);
    // }
}
