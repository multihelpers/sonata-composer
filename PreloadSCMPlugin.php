<?php

namespace Sonata\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class PreloadSCMPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        var_dump("here");
    }
}