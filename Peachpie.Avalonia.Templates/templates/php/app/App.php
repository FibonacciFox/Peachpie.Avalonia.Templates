<?php

use Avalonia\Application;
use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;
use View\MainWindow;

class App extends Application
{
    public function __construct()
    {
        $this->InitializeComponent();
    }

    public function OnFrameworkInitializationCompleted(): void
    {

        $this->ApplicationLifetime->MainWindow = new MainWindow();

    }

    public function InitializeComponent(): void
    {
        AvaloniaXamlLoader::Load($this);
    }
}