# manager-admin-laravel

Консольный менеджер пользователей для Laravel.

## Мотивация 

Очень часто возникает необходимость быстро создать или удалить пользователя без использования веб интерфейса. Данный 
пакет предоставляет возможность управления пользователями через консоль. Процесс удаления\создания пользователя ведется
 пошагово и не вызывает сложностей для людей не знакомых с tinker.

## Установка

С помощью composer:

```bash
$ cd <project-name>
$ composer require pavelpolv/manager-admin-laravel
```

После обновления composer добавьте Service Provider в массив provider файла config / app.php

`Pavelpolv\ManagerAdminLaravel\ManagerAdminLaravelProvider::class,`

Опубликуйте файлы необходимые для работы приложения с помощью команды:

`php artisan vendor:publish --provider="Pavelpolv\ManagerAdminLaravel\ManagerAdminLaravelProvider"`

Добавьте в массив $commands файла /app/Console/Commands

`manager:admin'=>Commands\UserManager\AdminManager::class,`

## Использование

Выполните в папке проекта

```$ php artisan manager:user ```

Далее, следуя инструкциям добавьте/удалите пользователя.

## Локализация

На данный момент доступны дава поакета локализации: RU, EN.
