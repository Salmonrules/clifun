<?php

namespace Tests\AppBundle\Command;

use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use AppBundle\Command\ClifunCommand;

class ListCommandTest extends KernelTestCase
{
    /**
     * @test
     */
    public function executeCommand()
    {
        $kernel = $this->createKernel();
        $kernel->boot();

        // Add the Clifun command to the unit test
        $application = new Application($kernel);
        $application->add(new ClifunCommand());

        // Prefill the command
        $command = $application->find('clifun:demo');
        // Initiate the command tester
        $commandTester = new CommandTester($command);
        // Execute the command
        $commandTester->execute(
            array(
                'object'    => 'kiwi',
                '--color'  => 'red',
            )
        );

        $this->assertEmpty($commandTester->getDisplay());
    }
}