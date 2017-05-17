<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Laracasts\integrated\Extensions\Laravel as IntegrationTest;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
