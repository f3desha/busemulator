<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Bus Emulator REST API install guide

Bus Emulator API is a product according to next tech spec:

Нужно реализовать эмулятор автобуса, который должен иметь возможность отправится из пункта  “A” в пункт “B”
останавливаясь только на промежуточных остановка, давая возможность войти/выйти пассажирам.

Условия:
- администратор может нанимать водителей
- администратор станции может устанавливать:
— маршрут
— определять кол-во остановок
— автобус
— водителя
- автобусом может управлять только водитель

Приложение нужно реализовать на Laravel 6 и выше управление должно осуществлять через REST API 

Что покроет данное задание:
- Реализация базовой авторизация
- Применение сидеров (seeds) для создания первого пользователя с данными для входа (email - admin@admin.com и паролем password)
- Создание миграции для маршрутов, автобусов
- Создание CRUD (Create, Read, Update, Delete) для маршрутов, автобусов, водителей
- Валидация запросов

# Installation
- Run your local server
- Run 'composer install' command from terminal
- Copy .env.example file and change it to .env
- Paste in .env file 
DB_CONNECTION=sqlite
DB_DATABASE=*LARAVEL_ROOT*/database/busemulator.sqlite
- Run 'php artisan migrate:refresh --seed'
