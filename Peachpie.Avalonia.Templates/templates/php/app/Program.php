<?php

use Avalonia\Controls\ShutdownMode;
use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;

$lifetime = new ClassicDesktopStyleApplicationLifetime();

$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnLastWindowClose;


AppPhpBuilder::Configure("App, PeachpieAvaloniaAppTemplate")->UsePlatformDetect()->WithInterFont()->SetupWithLifetime($lifetime);

$lifetime->Start(args: null);