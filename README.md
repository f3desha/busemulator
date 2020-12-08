<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Bus Emulator REST API install guide
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.gyazo.com/2b44569acacf2e6b9dec60f6a5bfd25d.png" width="400"></a></p>

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

# Credentials
admin@admin.com:password [Admin role]
driver@admin.com:driver [Driver role]
drivera@admin.com:driver [Driver role]
driverb@admin.com:driver [Driver role]
user@admin.com:regular [User role]

# Workflow
Use Admin account to:
- <a href="/docs/#store-a-newly-created-route-point">Create as many Route Points as you want</a>
- <a href="/docs/#store-a-newly-created-route">Create Route</a>
- <a href="/docs/#add-a-point-to-route">Add route points to Route</a>
- <a href="/docs/#store-a-newly-created-bus">Create new Bus</a>
- <a href="/docs/#assign-route-to-bus">Assign Route to bus</a>
- <a href="/docs/#change-users-role-to-driver">Promote regular user to driver or use seeded drivers</a>
- <a href="/docs/#assign-driver-to-bus">Assign Driver to bus</a>

Use Driver account to:
- <a href="/docs/#drive-a-bus">Drive a bus this driver assigned to</a>
