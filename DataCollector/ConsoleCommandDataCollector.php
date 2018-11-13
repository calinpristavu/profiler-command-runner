<?php

namespace Evozon\Bundle\ProfilerCommandRunner\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

class ConsoleCommandDataCollector extends DataCollector
{
    /**
     * No data collection needed.
     *
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
    }

    /**
     * No data reset needed.
     *
     * {@inheritdoc}
     */
    public function reset()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'console_command';
    }
}