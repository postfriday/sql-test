1. Устанавливаем [Docker](https://www.docker.com/community-edition). 
2. Клонируем репозиторий:
```shell
git clone https://github.com/postfriday/sql-test
```
3. Переходим в папку проекта:
```shell
cd sql-test
```
4. Поднимаем сервис Docker:
```shell
docker-compose up -d && docker-compose logs -f composer && docker-compose ps
```
5. Дождаться выполнения *composer install*. Если сервис поднялся успешно, то в консоли наблюдаем следующую картину: ![docker-compose ps](docs/docker-compose-ps.png)
6. Выполняем миграции:
```shell
docker-compose exec php php vendor/bin/phinx migrate
```
7. Сидируем данные:
```shell
docker-compose exec php php vendor/bin/phinx seed:run
```
9. Подключаемся к БД с помощью клиента на `localhost:33060` (login: `homestead`, password: `secret`)
10. Выполняем тестовое задание.
11. Выключаем проект:
```shell
docker-compose down
```
