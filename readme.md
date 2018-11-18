  Разворачивание виртуальной машины.
1. Установить Vagrant. Установить VirtualBox. Установить Git Bush.
2. В Git Bash прописать команды vagrant init laravel/homestead и vagrant up.
3. Далее будет создана папка Homestead в корневом каталоге (прим. с:/User/Name/Homestead), 
Переходим в папку Homestead и прописываем команду bash init.sh, которая создаст файл Homestead.yaml - это конфигурационный файл.
4. Далее настраиваем Homestead.yaml
5. В папке C:/Windows/system32/drivers/etc, находим файл hosts и открываем через текстовый документ, настраиваем ip.
6.Запускаем vagrant , vagrant up.
 
 Установка окружения.
1. Уставнока Apache 2 на Ubuntu. Выполняем данной командой: sudo apt-get install apache2
2. Установка MySQL. Выполняем данной командой: sudo apt-get install mysql-server
3. Установка PHP7.2. Для начала необходимо установить дополнительный репозиторий командой sudo add-apt-repository ppa:ondrej/php 
Установка PHP7.2(part 2). Выполняем данной командой: sudo apt-get install php7.2
4. Установка Composer. Для начала загружаем его curl -sS https://getcomposer.org/installer -o composer-setup.php
А после устанавливаем sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

   Запуск проекта.
1. В дерикторию скачиваем проект командой git clone https://github.com/harveydent333/LaravelWork
Подключаем laravel командой  composer require laravel/homestead --dev
2. В открываем файл .env.example и устанавливаем параметры:

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

Можно инициализировать ключ (APP_KEY) командой php artisan key:generate 
!! Сохраняем файл как  .env

3. Для создания БД, нужно произвести миграцию. Все необходимые файлы созданы и находятся в репозитории, вам необходимо будет только выполнить миграцию, командой php artisan migrate 
4. Далее добавляем в нашу БД пользователя с ролью администратор, командой php artisan db:seed --class=DatabaseSeeder
5. Открываем браузер и заходими по ip, проверяем работу.
//==================================================================================================================================

Работа с пользователями: 
Для авторизации под пользователем admin, необходимо ввести administrator@gmail.com в поле email и пароль 123456789.
Данные для почты:
1) MAIL_DRIVER=smtp
2) MAIL_HOST=smtp.gmail.com
3) MAIL_PORT=587
4) MAIL_USERNAME=testlaravel3334@gmail.com
5) MAIL_PASSWORD=123456789qq+
6) MAIL_ENCRYPTION=tls

