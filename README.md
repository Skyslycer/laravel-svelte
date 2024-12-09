# Laravel + Svelte

An example repository for using Laravel with the latest version of Svelte.
It uses the beta version of Inertia 2 to allow for the latest Svelte version (5).

## Installation
You can either clone this repository and build from there. When doing that, make sure you
create a new `.env` (copy the example) file and run `php artisan key:generate` to generate a new key.
You will also need to create a new database (just an empty file `database.sqlite` in the `database` folder) 
and then run `php artisan migrate` to create the database tables.

**Or you can create your own following this guide:**

[https://blog.double-d.software/using-laravel-with-svelte/](https://blog.double-d.software/using-laravel-with-svelte/)

## Libraries used
- Laravel 11 (https://laravel.com/docs/11.x/installation#creating-an-application)
- Inertia 2 (https://v2.inertiajs.com/)
- Svelte 5 (https://svelte.dev/)
- Tailwind CSS (https://tailwindcss.com/)
- Vite (https://vitejs.dev/)
