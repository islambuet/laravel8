composer create-project --prefer-dist laravel/laravel laravel8
composer require livewire/livewire

composer require laravel/jetstream
php artisan jetstream:install livewire
php artisan livewire:publish --assets

php artisan make:livewire SystemModuleTask
app/Http/Livewire/SetupProducts.php

php artisan make:model Flight -m