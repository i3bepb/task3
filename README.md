## Запуск теста

Собираем локально образ, передаем туда через ARG id и имя локального пользователя в хост системе, чтобы затем было удобно монтировать файлы внутрь контейнера
```shell
docker build -f Dockerfile -t php8214-for-test:1.0.0 --build-arg LOCAL_USER_ID_ARG=1000 --build-arg LOCAL_GROUP_ID_ARG=1000 .
```

На базе этого образа запускаем контейнер, который подтянет зависимости
```shell
docker run -it --rm -v $(pwd):/home/www-data/application php8214-for-test:1.0.0 composer install
```

Запустить тест
```shell
docker run -it --rm -v $(pwd):/home/www-data/application php8214-for-test:1.0.0 composer test
```

## Задача №3

Даны веса посылок $boxes и вес, который может увезти курьер $weight.
Курьер должен возить по 2 посылки, которые вместе по весу будут строго равны $weight.
Необходимо найти максимальное количество рейсов, которые курьер сможет сделать с учетом условий.

```php
// первые входные данные
$boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
$weight = 6;
// вторые входные данные
$boxes = [2,4,3,6,1];
$weight = 5;
```

```php
public function getResult(array $boxes, int $weight): int
{
// какой-то код
}
```
