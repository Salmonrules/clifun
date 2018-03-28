<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

// Using CLImate framework to make some nice stuff with CLI
use League\CLImate\CLImate;

/**
 * Console command by using CLImate
 * Default object is kiwi
 * Options: eagle, hamster, kiwi
 * Default color is white
 * Options: See documentation README.md
 */
class ClifunCommand extends ContainerAwareCommand
{
    /**
     * Configure the command
     */
    protected function configure()
    {
        // Set the name, description, argument, option and help text for the command
        $this
            ->setName('clifun:demo')
            ->setDescription('Demo of a custom command.')
            ->addArgument(
                'object',
                InputArgument::OPTIONAL,
                'Which object do you want to see?'
            )
            ->addOption(
                'color',
                null,
                InputOption::VALUE_OPTIONAL,
                'If set, the object will be shown in that color. Default is white'
            )
            ->setHelp('Usage: clifun:demo [argument (optional)] [option (optional)]');
    }

    /**
     * Handle the object
     */
    private function getObject(InputInterface $input)
    {
        // Get the first argument and set it in a variable
        $object = $input->getArgument('object');

        // If argument is empty. Call the hamster.
        if (empty($object)) {
            $object = 'kiwi';
        }

        // Return the requested object
        return $object;
    }

    /**
     * Handle color
     */
    private function getColor(InputInterface $input)
    {
        // Set the default color to white
        $color = 'white';
        // If the color is choosen, change the color
        if ($input->getOption('color')) {
            $color = $input->getOption('color');
        }

        // Return the requested color
        return $color;
    }

    /**
     * Execute the command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Call CLImate object
        $climate = new CLImate;

        // Request argument
        $object = $this->getObject($input);

        // Set default color to white and if the color option is set, use that color please
        $color = $this->getColor($input);

        // Add some ASCII art in a folder
        $climate->addArt('app/Resources/views/art');

        // Clear the console
        $climate->clear();

        // Draw the ASCII art in terminal and animate it
        $climate->$color()->animation($object)->scroll('right');
    }
}
