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

## Схема таблиц базы данных:

Таблица rooms (основная таблица в которой содержится вся информация о комнатах)
id - уникальное значение int
city_id - id города из таблицы cities
area_id - id района из таблицы areas
street_id - id улицы из таблицы streets
seller_id - id продавца из таблицы sellers
description - описание
price - начальная цена
created-at - дата создания
updated-at - дата обновления

| id | city_id | area_id | street_id | salesman_id | description | price | created-at| updated-at|                      
|----|---------|---------|-----------|-------------|-------------|-------|-----------|-----------|

Таблица cities (таблица в которой содержится вся информация о городах).

| id | city_name |
|----|-----------|
id - уникальное значение int
city_name - город

Таблица areas (таблица в которой содержится вся информация о районах).

| id | area_name |
|----|-----------|
id - уникальное значение int
area_name - район

Таблица streets (таблица в которой содержится информация об улицах, номерах домов, корпусах домов и номерах квартир).

| id | street_name | home_number|frame_number|apartment_number|
|----|-------------|------------|------------|----------------|
id - уникальное значение int
street_name - улица
home_number - номер дома (при наличии)
frame_number - корпус (при наличии)
apartment_number - номер квартиры (при наличии)

Таблица sellers (таблица в которой содержится информация о продавце объектов недвижимости).

| id | name | surname | phone_number |
|----|------|---------|--------------|
id - уникальное значение int
name - Имя
surname - Фамилия
phone_number - номер телефона

Таблица images (таблица в которой содержится информация о ссылках на фотографии объекта).

| id | room_id | img |
|----|---------|-----|
id - уникальное значение int
room_id - внешний ключ на (id) таблицы rooms 
img - Ссылка на фотографию

## Выполнение курсовой:

Роут отдающий детали товара c индексом 1 GET:

```
http://api-hawking.my/api/v1/room-all/1
```

Роут отдающий все товары GET:

```
http://api-hawking.my/api/v1/room-all
```

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


