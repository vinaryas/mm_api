<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add([
                'text' => 'Dashboard',
                'url' => route('home'),
                'icon' => 'fas fa-tachometer-alt',
                'active' => ['home'],
            ]);

            $event->menu->add([
                'text' => 'Manajemen Otorisasi',
                'icon' => 'fas fa-user-shield',
                'submenu' => [
                    [
                        'text' => 'User',
                        'url' => route('user.index'),
                        'icon' => 'fas fa-bullseye',
                        'active' => ['user.index'],
                    ],
                    [
                        'text' => 'Role',
                        'url' => route('role.index'),
                        'icon' => 'fas fa-bullseye',
                        'active' => ['role.index'],
                    ],
                    [
                        'text' => 'Region',
                        'url' => route('region.index'),
                        'icon' => 'fas fa-bullseye',
                        'active' => ['region.index'],
                    ],
                    [
                        'text' => 'Permission',
                        'url' => route('permission.index'),
                        'icon' => 'fas fa-bullseye',
                        'active' => ['permission.index'],
                    ],
                    [
                        'text' => 'Permission Role',
                        'url' => route('permission_role.index'),
                        'icon' => 'fas fa-bullseye',
                        'active' => ['permission_role.index'],
                    ],
                    [
                        'text' => 'Store',
                        'url' => route('store.index'),
                        'icon' => 'fas fa-bullseye',
                        'active' => ['store.index'],
                    ],
                    [
                        'text' => 'Role User',
                        'url' => route('roleUser.index'),
                        'icon' => 'fas fa-bullseye',
                        'active' => ['roleUser.index'],
                    ],
                ],
            ]);
        });
    }
}
