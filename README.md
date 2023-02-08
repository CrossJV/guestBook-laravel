Шаги запуска

1. Склонировать репозиторий
2. Перйти в папку с проектом
3. Запустить в консоли composer install
4. Запустить в консоли copy .env.example .env
5. Отредактировать в файле /config/database.php данные для подключения к БД
5. В файле .env заполнить поля своими данными (DB_DATABASE, DB_USERNAME, DB_PASSWORD), я использовал postgres
6. Запустить в консоли php artisan key:generate
7. Запустить в консоли php artisan migrate, создасться таблица юзеров
8. Запустить в консоли php artisan serve
9. Перейти http://localhost:8000/user
