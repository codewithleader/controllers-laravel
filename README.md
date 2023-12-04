# Laravel

## Instalaciones

- Instalamos gestionador de paquetes de LARAVEL (Si ya lo instalaste NO Volver a instalar):

```bash
composer global require laravel/installer
```

- Crear nueva app:

```bash
laravel new appname
```

- Instalar dependencias (Opcional):

```bash
composer install
```

- Generar un AppKey (Opcional):

```bash
php artisan key:generate
```

- Run:

```bash
php artisan serve
```

## Metodo route('aliasName')

Entre doble moustache podemos agregar las diferentes directivas para que Blade ejecute el comando

```html
<a href="{{ route('about') }}">About</a>
```

## Metodo asset('path')

```html
<img src="{{ asset('assets/img/1.jpg') }}" alt="My card 1" />
```

## Migraciones

1. CREAR migración

```bash
php artisan make:migration create_name_table
```

2. SINCRONIZA la base de datos con las migraciones que tengamos en `database/migrations`

```bash
php artisan migrate
```

3. REVERTIR LA ULTIMA migración

```bash
php artisan migrate:rollback
```

4. REVERTIR UNA MIGRACIÓN EN ESPECÍFICO por el número de Lote (BATCH)

```bash
php artisan migrate:rollback --batch=2
```

5. REVERTIR TODAS las migraciones con un solo comando

```bash
php artisan migrate:reset
```

6. REVERTIR TODAS LAS MIGRACIONES Y CREAR UNA NUEVA migracion con un solo comando

```bash
php artisan migrate:refresh
```

### IMPORTANTE: No se recomienda REVERTIR ya que si tenemos claves foraneas podría dar error. En cambio deberemos crear una ACTUALIZACIÓN de la migración

7. ACTUALIZACIÓN: Crear actualización de la migración

```bash
php artisan make:migration update_name_table
```

# Models

1. Crear model

```bash
php artisan make:model Name
```

## Crear modelo con respecto a la migracion

```bash
php artisan make:model Name --migration
```

# Controllers

1. Crear un controlador (Upper Camel Case)

```bash
php artisan make:controller NameController
```

# Eloquent ORM

- [https://laravel.com/docs/10.x/eloquent](https://laravel.com/docs/10.x/eloquent)
