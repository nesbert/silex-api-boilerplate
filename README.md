silex-api-boilerplate
==============

Learning by doing. An attempt to create a RESTful API using [Silex](http://silex.sensiolabs.org).

## Getting Started

Must have PHP machine setup for development PHP 5.3.x. A `DocumentRoot` pointed to `silex-api-boilerplate/web`.

### Installation

To get the source. Clone this repository locally or [download](https://github.com/nesbert/silex-api-boilerplate/archive/master.zip).

```bash
# clone and name application
git clone git@github.com:nesbert/silex-api-boilerplate.git
cd silex-api-boilerplate
```
All commands relative `silex-api-boilerplate` directory.

### Get Dependencies

```bash
composer.sh install
```

### Set Permissions

```bash
rm -rf app/cache/*
rm -rf app/logs/*
APACHEUSER=`ps aux | grep -E '[a]pache|[h]ttpd' | grep -v root | head -1 | cut -d\  -f1`
sudo chmod +a "$APACHEUSER allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
sudo chmod +a "`whoami` allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
```

### Run Functional Tests

```bash
../vendor/bin/phpunit
```

## Sample Endpoints

`http://myapi.dev` being a local domain.

```
http://myapi.dev/
http://myapi.dev/test/users
http://myapi.dev/test/users/1
```

## OSS <3.

- [Silex](http://silex.sensiolabs.org)
- [silex-tutorial](https://github.com/georgiana-gligor/silex-tutorial) <- really helped

## License

[MIT](http://opensource.org/licenses/MIT)

## Contribute

Pull Requests always welcome, as well as any feedback or issues.
