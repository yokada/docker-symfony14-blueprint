# README.md

## ToDos

- Propel 1.4.2 integration for Symfony 1.4


## Installing App

```
$ docker-compose up
```

example of /etc/hosts record here:

```
127.0.0.1 jobeet.local
```


## build db schema using propel

```
$ docker-compose exec app bash
```

```
$ cd /var/www
$ php symfony propel:build-schema
```

