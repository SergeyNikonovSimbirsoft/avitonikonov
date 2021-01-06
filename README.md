# myavito
Разработчик - Никонов Сергей
<br/>
<br/>
Обучающий проект "Доска объявлений"
<br/>
<br/>
Инструкция по разворачиванию проекта:
<ul>
    <li>Развернуть репозиторий локально</li>
    <li>Переключится на ветку - develop</li>
    <li>В корне репозитория в командной строке прописать команду "docker-compose up --build"</li>
    <li>Дождаться пока composer не развернет все пакеты в папке vendor (в командной строке появится "имя_контейнера_composer  exited with code 0"</li>
    <li>Зайти в админку бд, в любом браузере перейти по пути <a href="http://127.0.0.1:6080/?pgsql=db">http://127.0.0.1:6080/?pgsql=db</a> (Имя пользователя - postgres; Пароль - 123456)</li>
    <li>Создать новую бд</li>
    <li>В myavito/public/ создать файл robots.txt, в котором нужно указать правила индексации</li>
    <li>В myavito дублировать файл .env.example (использовать имя .env), в нём нужно прописать имя созданной бд, логин и пароль</li>
    <li>В командной строке прописать команду "docker-compose exec web bash" (будет осуществлен переход к cmd виртуальной машины</li>
    <li>В cmd виртуальной машины выполнить команду "php artisan key:generate" для генерации ключа приложения</li>
    <li>В cmd виртуальной машины выполнить компанду "php artisan migrate" для того, чтобы накатить миграции</li>
    <li>Чтобы просмотреть стартовую страницу, в любом браузере перейти по пути <a href="http://127.0.0.1:8080/public/">http://127.0.0.1:8080/public/</a></li>
</ul>
На данный момент готово:
<ul>
    <li>
        Репозиторий:
        <ul>
            <li>Создание репозитория</li>
            <li>Настройка .gitignore</li>
            <li>Привязка проекта к репозиторию</li>
        </ul>
    </li>
    <li>
        Docker:
        <ul>
            <li>Создание контейнеров (adminer, db, composer, web)</li>
            <li>Минимальная настройка конфигурации Docker</li>
        </ul>
    </li>
    <li>
        Laravel:
        <ul>
            <li>Интеграция пустого фреймворка Laravel</li>
        </ul>
    </li>
</ul>