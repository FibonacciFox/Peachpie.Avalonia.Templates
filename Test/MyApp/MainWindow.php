<?php

namespace MyApp;

use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;
use Avalonia\Threading\DispatcherTimer;
use Peachpie\Avalonia\Controls\UxTextBlock;
use Peachpie\Avalonia\Controls\UxWindow;
use System\TimeSpan;

class MainWindow extends UxWindow
{
    public UxTextBlock $DateView;

    public function __construct()
    {
        //Сначала всегда инициализируем axaml.
        $this->InitializeComponent();

        $this->DateView = $this->FindByName("DateView");

        DispatcherTimer::Run(action: function (): bool {
            $this->DateView->Text = date("Y-m-d H:i:s");
            return true;
        }, interval: TimeSpan::FromSeconds(0.1), priority: null);

    }

    //Не удаляйте метод, если используете разметку axaml
    public function InitializeComponent(): void
    {
        AvaloniaXamlLoader::Load($this);
    }
}

