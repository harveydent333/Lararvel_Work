 1. Запускаем vagrant , командой:  vagrant up.
Запуск проекта, предумастривает установленные: Apache 2, MySQL, PHP7.2+, Composer.
2. В дерикторию скачиваем проект командой git clone https://github.com/harveydent333/testovoe_zadanie.git
Подключаем laravel командой  composer require laravel/homestead --dev

3.Открываем файл .env.example и устанавливаем параметры:
1) APP_NAME=Laravel
2) APP_ENV=local
3) APP_KEY=base64:dusqSTIMDKaHBvhkL1u34scJOAYip0p5fqkiVHi+LaI=
4) APP_DEBUG=true
5) APP_URL=http://localhost
6) DB_CONNECTION=mysql
7) DB_HOST=127.0.0.1
8) DB_PORT=3306
9) DB_DATABASE=testDB
10) DB_USERNAME=test-user
11) DB_PASSWORD=123
12) MAIL_DRIVER=smtp
13) MAIL_HOST=smtp.gmail.com
14) MAIL_PORT=587
15) MAIL_USERNAME=testlaravel3334@gmail.com
16) MAIL_PASSWORD=123456789qq+
17) MAIL_ENCRYPTION=tls

!! Сохраняем файл как  .env

4. Создаем таблицы в БД. Выполнить миграцию, командой php artisan migrate 
5. Далее добавляем в нашу БД пользователя с ролью администратор, командой php artisan db:seed --class=DatabaseSeeder
6. Открываем браузер и заходими по ip, проверяем работу.
Для авторизации под пользователем admin, необходимо ввести administrator@gmail.com в поле email и пароль 123456789.
