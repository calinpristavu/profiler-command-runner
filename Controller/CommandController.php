<?php

namespace App\Evozon\CmdWrapper\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Console\Application;;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;

class CommandController extends Controller
{
    /**
     * @param Request $request
     * @Route(path="/run-command", name="run_command")
     *
     * @return Response
     * @throws \Exception
     */
    public function runAction(Request $request, KernelInterface $kernel): Response
    {
        $consoleApp = new Application($kernel);
        $consoleApp->setAutoExit(false);

        $input = new StringInput($request->request->get('command'));
        $output = new BufferedOutput();

        $consoleApp->run($input, $output);

        return new Response($output->fetch());
    }
}