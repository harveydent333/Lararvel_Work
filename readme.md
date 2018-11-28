<<<<<<< HEAD
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
 1. Запускаем vagrant , командой:  vagrant up.
Запуск проекта, предумастривает установленные: Apache 2, MySQL, PHP7.2+, Composer.
2. В дерикторию скачиваем проект командой git clone https://github.com/harveydent333/Lararvel_Work.git
Подключаем laravel командой  composer require laravel/homestead --dev

3.Открываем файл .env.example и устанавливаем параметры:
1) APP_NAME=Laravel
2) APP_ENV=local
3) APP_KEY=base64:dusqSTIMDKaHBvhkL1u34scJOAYip0p5fqkiVHi+LaI=
4) APP_DEBUG=true
5) APP_URL=http://localhost
6) APP_URL_ANGULAR=http://localhost:4200
7) DB_CONNECTION=mysql
8) DB_HOST=127.0.0.1
9) DB_PORT=3306
10) DB_DATABASE=testDB
11) DB_USERNAME=test-user
12) DB_PASSWORD=123
13) MAIL_DRIVER=smtp
14) MAIL_HOST=smtp.gmail.com
15) MAIL_PORT=587
16) MAIL_USERNAME=testlaravel3334@gmail.com
17) MAIL_PASSWORD=123456789qq+
18) MAIL_ENCRYPTION=tls

!! Сохраняем файл как  .env

4. Создаем таблицы в БД. Выполнить миграцию, командой php artisan migrate 
5. Далее добавляем в нашу БД пользователя с ролью администратор, командой php artisan db:seed --class=DatabaseSeeder
6. Открываем браузер и заходими по ip, проверяем работу.
Для авторизации под пользователем admin, необходимо ввести administrator@gmail.com в поле email и пароль 123456789.
>>>>>>> 4f0cf2aa84f57a107d7d76e2208e5ca37bdfef8c
