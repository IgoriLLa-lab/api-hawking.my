# Курсовая работа
## Реализация Rest Api для отдачи json части функционала сайта - [Агентство недвижимости «Адресат» ](https://adresat.pro/).

## Задание

- Реализовать Роут отдающий детали комнаты https://adresat.pro/catalog/sale-rooms/281035
- Реализовать роуты необходимые для помещения комнат в сравнение и удаление комнат из сравнения
- Реализовать роуты необходимые для помещения комнат в избранное и удаление комнат из избранного
- Реализовать роут отдачи данных для страницы сравнения https://adresat.pro/compare/
- Реализовать роут отдачи данных для страницы избранного (*)

## Используемые технологии

- Laravel Framework 9.24.0
- PHP 8.1
- OpenServer 5.4.2
- Apache 2.4
- MySQL 8.0 (имя базы данных api_hawking_db)
- Postman для проверки API

Так как у нас в задании стоит задача выводить детали Комнат, то мной было принято решение, сделать таблицу Rooms(Комнаты) которая будет хранить только тип объекта - Комнаты
Дальнейшее расширение проекта возможно за счет создания новых таблиц, а именно: 'Квартиры', 'Дома', 'Участки' и тд.

## Api сайта [Агентство недвижимости «Адресат» ](https://adresat.pro/) версия 1 (V1).

## Схема таблиц базы данных:

Таблица rooms (основная таблица в которой содержится вся информация о комнатах).
id - уникальное значение int
city_id - id города из таблицы cities
area_id - id района из таблицы areas
street_id - id улицы из таблицы streets
seller_id - id продавца из таблицы sellers
description - описание
price - начальная цена
created-at - дата создания
updated-at - дата обновления

| id | city_id | area_id | street_id | salesman_id | description | price | created-at| updated-at |                      
|----|---------|---------|-----------|-------------|-------------|-------|-----------|------------|

Таблица cities (таблица в которой содержится вся информация о городах).
id - уникальное значение int
city_name - город

| id | city_name |
|----|-----------|


Таблица areas (таблица в которой содержится вся информация о районах).
id - уникальное значение int
area_name - район

| id | area_name |
|----|-----------|


Таблица streets (таблица в которой содержится информация об улицах, номерах домов, корпусах домов и номерах квартир).
id - уникальное значение int
street_name - улица
home_number - номер дома (при наличии)
frame_number - корпус (при наличии)
apartment_number - номер квартиры (при наличии)

| id | street_name | home_number  | frame_number | apartment_number |
|----|-------------|--------------|--------------|------------------|


Таблица sellers (таблица в которой содержится информация о продавце объектов недвижимости).
id - уникальное значение int
name - Имя
surname - Фамилия
phone_number - номер телефона

| id | name | surname | phone_number |
|----|------|---------|--------------|


Таблица images (таблица в которой содержится информация о ссылках на фотографии объекта).
id - уникальное значение int room_id - внешний ключ на (id) таблицы rooms
img - Ссылка на фотографию

| id | room_id | img |
|----|---------|-----|


Таблица properties (таблица в которой содержится информация о характеристиках объекта) В дальнейшем можно добавлять характеристики для домов, участков и тд.
id - уникальное значение int
property - характеристика (материал стен высота потолков, площадь кухни и тд)

| id | property |
|----|----------|


Таблица property_rooms (связующая таблица характеристик и комнат).
id - уникальное значение int
room_id - внешний ключ на (id) таблицы rooms
property_id - внешний ключ на (id) таблицы properties

| id | room_id | property_id |
|----|---------|-------------|


Таблица mortgages (таблица в которой содержится информация об улицах, номерах домов, корпусах домов и номерах квартир).
id - уникальное значение int
bank_name - название банка
bank_logo - лого банка (картинка)
down_payment - первоначальный взнос
term - срок кредитования
rate - ставка
sum - сумма
payment_month - Ежемесячный платеж

| id  | bank_name | bank_logo | down_payment | term | rate | sum | payment_month |
|-----|-----------|-----------|--------------|------|------|-----|---------------|


Таблица mortgages_rooms (связующая таблица ипотеки и комнат).
id - уникальное значение int
room_id - внешний ключ на (id) таблицы rooms
mortgage_id - внешний ключ на (id) таблицы mortgages

| id | room_id | mortgage_id |
|----|---------|-------------|


Таблица comparisons (таблица в которую добавляются объекты для сравнения по их id).
id - уникальное значение int
room_id - внешний ключ на (id) таблицы rooms

| id | room_id |
|----|---------|


Таблица room_favorites (таблица избранных объектов по их id).
id - уникальное значение int
room_id - внешний ключ на (id) таблицы rooms

| id | room_id |
|----|---------|

Кроме того, все таблицы имеют колонки created_at и updated_at.

Так же добавлены стандартные таблицы которые создаются Laravel Sanctum для авторизации регистрации и хранения токенов.

## Выполнение курсовой:

Основной контроллер RoomController в нем содержатся основные методы для работы с Комнатами (Room):

index (Отдает все комнаты из таблицы Rooms).

Роут отдающий все товары GET:
```
http://api-hawking.my/api/v1/room-all
```

show (Отдает все комнаты по id из таблицы Rooms).

Роут отдающий детали товара c индексом 1 GET:
```
http://api-hawking.my/api/v1/room-all/1
```

store (Создает новый объект (комнату) в таблицу Rooms).

Роут создающий товар POST:

```
http://api-hawking.my/api/v1/room-all
```

Вид предаваемого JSON:

```
{
        "city_id": 30,
        "area_id": 1,
        "street_id": 1,
        "seller_id": 8,
        "images":[ 
            {"img": "1.jpg"}, 
            {"img": "2.jpg"},
            {"img": "3.jpg"},
            {"img": "4.jpg"} 
        ], 
        "properties":[ 
            {"property": "1"}, 
            {"property": "2"}, 
            {"property": "3"},
            {"property": "4"},
            {"property": "5"}  
        ],
        "mortgages":[
            {"mortgage": "1"},
            {"mortgage": "2"},
            {"mortgage": "3"}
        ],
        "description": "Cтроим в Екатеринбурге такие жилые дома, чтобы жителям нравилось находиться в квартире, в подъезде, во дворе. Мы создаём полноценное пространство, которое приятно назвать домом.",
        "price": "99999"
}
```

Контроллер ComparisonController в нем содержатся основные методы для работы со сравнением объектов (Room):

compare метод(Добавляет объект в таблицу сравнения (comparisons) по id).

Роут добавляющий товар в сравнение:
```
http://api-hawking.my/api/v1/compare/1
```

index метод(Отдает все комнаты из таблицы comparisons).

Роут отдающий комнаты из таблицы сравнения:
```
http://api-hawking.my/api/v1/compare
```

delete метод(Удаляет объект из сравнения по его id).

Роут удаляющий товар из сравнения:
```
http://api-hawking.my/api/v1/compare/delete/1
```


Контроллер RoomFavoriteController в нем содержатся основные методы для работы с избранным объектов (Room):

favorite метод(Добавляет объект в таблицу избранного (room_favorites) по id).

Роут добавляющий товар в избранное:
```
http://api-hawking.my/api/v1/favorite/1
```

index метод(Отдает все комнаты из таблицы room_favorites).

Роут отдающий комнаты из таблицы избранного:
```
http://api-hawking.my/api/v1/favorite
```

delete метод(Удаляет объект из избранного по его id).

Роут удаляющий товар из избранного:
```
http://api-hawking.my/api/v1/compare/delete/1
```

В данном проекту все роуты общедоступные, то есть пользователь может заходить на наш Api не авторизовавшись и управлять данными.

Проект добавлен Laravel Sanctum, для того, что бы был пользователь админ и он мог удалять и редактировать наши объекты Room.

Роут регистрации нового Юзера:
```
http://api-hawking.my/api/v1/register
```
В запросе перадется email, password, password_confirmation.

Роут для разлогирования:
```
http://api-hawking.my/api/v1/logout
```
В запросе передается token.

Роут для входа зарегистрированного Юзера:
```
http://api-hawking.my/api/v1/login
```
В запросе передается email, password.


