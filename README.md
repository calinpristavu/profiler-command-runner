# CommandRunnerBundle

This bundle allows users to run symfony console commands directly form the Web Profiler Toolbar.

In order to set up the Web Profiler toolbar, follow the [official symfony documentation](https://symfony.com/doc/current/profiler.html) for the package.

# Installation
## Composer
``` composer require evozon-php/profiler-command-runner ```
## Enable the bundle
When using `symfony/flex`, the bundle is autoconfigured and ready to go!

For symfony 3.x and previous, follow these steps:

Step 1: Register the bundle

    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Evozon\Bundle\ProfilerCommandRunner\ProfilerCommandRunnerBundle(),
            // ...
        );
    }

Step 2: Register the routes

    // app/config/routing.yml

    _profiler_command_runner:
        resource: '@ProfilerCommandRunner/Resources/config/routes.xml'

# Usage
After installing and enabling the bundle, go to your application in the browser.

If the Web Profiler Bundle is enabled, it should contain an extra entry with an input field and a "Run" button.

Any command that is available in the application by running `./bin/console command:name:here --with=parameters` will work
from the user interface as well.

For example, try `list --raw`

## Word of caution
You can run **ANY** command from the Web Profiler Toolbar.

Even destructive commands like `doctrine:database:delete --force`!