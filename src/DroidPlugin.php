<?php

namespace Droid\Plugin\Composer;

class DroidPlugin
{
    public function __construct($droid)
    {
        $this->droid = $droid;
    }
    
    public function getCommands()
    {
        $commands = [];
        $commands[] = new \Droid\Plugin\Composer\Command\ComposerInstallCommand();
        return $commands;
    }
}
