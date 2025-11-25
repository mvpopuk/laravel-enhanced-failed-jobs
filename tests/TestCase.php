<?php

namespace Mvpopuk\LaravelEnhancedFailedJobs\Tests;

use Mvpopuk\LaravelEnhancedFailedJobs\LaravelEnhancedFailedJobsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelEnhancedFailedJobsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
