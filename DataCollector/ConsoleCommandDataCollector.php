<?php

namespace App\Evozon\CmdWrapper\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

class ConsoleCommandDataCollector extends DataCollector
{

    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        // none
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        // none
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'console_command';
    }
}