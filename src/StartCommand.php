<?php
namespace iakio\extserver;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
class StartCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('extserver:start')
            ->addOption(
                'server',
                'S',
                InputOption::VALUE_OPTIONAL,
                '<addr>:<port>',
                'localhost:8080'
            )
            ->addOption(
                'docroot',
                't',
                InputOption::VALUE_OPTIONAL,
                'Document root',
                '.'
            );
    }

    protected function execute (
        InputInterface $input,
        OutputInterface $output
    )
    {
        $server = $input->getOption('server');
        $docroot = $input->getOption('docroot');
        list($serverName, $port) = explode($server);
        if (!$port) {
            $port = 8080;
        }
    }
}
