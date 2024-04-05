<?php

namespace App\Providers;

use Native\Laravel\Menu\Menu;
use Native\Laravel\Facades\Window;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Contracts\ProvidesPhpIni;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Menu::new()
            ->appMenu()
            ->submenu('NativePHP', Menu::new()
                ->link('https://nativephp.com', 'Documentation')
            )
            ->submenu('Sviluppatore', Menu::new()
                ->link('https://www.instagram.com/robertosasso96/', 'Instagram')
                ->link('https://www.linkedin.com/in/roberto-sasso-fullstack/', 'Linkedin')
                ->link('https://github.com/roberto-sasso1996', 'GitHub')
            )
            ->register();
 

        Window::open()
            ->width(900)
            ->height(1000)
            ->rememberState()
            ->titleBarHidden()
            ->hasShadow(true);
        // MenuBar::create()
        //     ->icon(storage_path('app/menuBarIconTemplate.png'))
        //     ->label('ToDoApp')
        //     ->width(500)
        //     ->height(600)
        //     ->withContextMenu(
        //         Menu::new()
        //             ->label('ToDoList')
        //             ->separator()
        //             ->link('https://sassoroberto.it', 'Sviluppato da...')
        //             ->separator()
        //             ->quit()
        //     );
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
            'session.use_cookies' => 1, // Abilita l\'uso dei cookie per le sessioni
            'session.save_path' => '/tmp/sessions', // Imposta la cartella di archiviazione delle sessioni
        ];
    }
}
