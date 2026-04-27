<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return (new Config())
    ->setRiskyAllowed(false)
    ->setRules([
        '@auto' => true

    ])
    // by default, Fixer looks for '*.php' files excluding './vendor/' -here, you can groom this configuration to your needs
    ->setFinder(
       (new Finder())
           // root folder to check
           ->in(__DIR__)    
           // additional files, eg bin entry file
           // ->append([__DIR__.'/bin_entry-file'])
           //folders to exclude, if any
           // ->exclude([*...*/])
           //path patterns to exclude, if any
           // ->notPath([*...*/])
           // extra configs
           // ->ignoreDotFiles(true)//true by default in v3, false in v4 or future modern versions
           // ->ignoreVCS(true)//true by default in v3, false in v4 or future modern versions
    );