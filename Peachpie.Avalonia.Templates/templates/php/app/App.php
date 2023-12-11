<?php
namespace PeachpieAvaloniaAppTemplate;

    use Avalonia\Application;
    use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;

    class App extends Application
    {
        public function __construct()
        { 
            $this->InitializeComponent();
        }

        public function OnFrameworkInitializationCompleted() : void {
      
            $this->ApplicationLifetime->MainWindow = new MainWindow(); 
            
        }

        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }