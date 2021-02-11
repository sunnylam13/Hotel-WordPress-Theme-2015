# A Wordpress Hospitality Theme

## File Paths/UNIX

```
cd 'Y:\Sync\Programming Projects\web_dev_wordpress\themes\Hotel-WordPress-Theme-2015\'
```

## MAMP

You want to load up the WordPress installation not the theme here...

http://localhost/hotel.sunny.dallas.2015/

http://localhost/hotel.sunny.dallas.2015/wp-admin/index.php

## Docker

If using Docker make sure that its mapped ports in `docker-compose.yaml` don't conflict with your own local server/wp server installs.

## WordPress Settings

Go to Settings > Permalinks.

* Switch to Post Name

Go to Settings > Reading

* Switch to static page.

* Homepage: Home

	* This ensures that you land on the correct front page.

* Posts page:  Blog

## WordPress Import

-----------------

**EXAMPLE**.

For example, to adjust common `php.ini` flags like `upload_max_filesize`, you could create a `custom.ini` with the desired parameters and place it in the `$PHP_INI_DIR/conf.d/` directory.

In the case of my `hfenix_theme_080415` docker env.

```
# php -i | grep php.ini
Configuration File (php.ini) Path => /usr/local/etc/php
```

Specifically folder:

```
/usr/local/etc/php/conf.d/
```

The current version of php in the docker is:

```
# php -v
PHP 7.4.13 (cli) (built: Dec 11 2020 08:24:16) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.13, Copyright (c), by Zend Technologies
```

You'll also need a blank copy of `php.ini` (possibly from `php-src`) as well.

See:  [php-src/php.ini-development](https://github.com/php/php-src/blob/PHP-7.4.13/php.ini-development)

* there are multiple versions
* I chose the one that matches the one being used in the docker


> continuing on...

This method adds one more directory to parse for php, having all your other settings untouched. 

Just add the following two lines to the corresponding sections in the docker-compose.yml:

```
services:
  php:
    volumes:
     - ./php-ini:/usr/local/etc/php/custom.d
    environment:
      PHP_INI_SCAN_DIR: "/usr/local/etc/php/custom.d:/usr/local/etc/php/conf.d"
```

modified to use from my local drive

`\docker_custom\php_ini\`

```
services:
  php:
    volumes:
     - ../../../docker_custom/php_ini/:/usr/local/etc/php/custom.d
    environment:
      PHP_INI_SCAN_DIR: "/usr/local/etc/php/custom.d:/usr/local/etc/php/conf.d"
```

* we map a folder `php_ini` from our local drive into the docker drive as a folder we call `custom.d`
* then we have docker scan that folder for ini files
* it then symlinks/places any ini files found into `conf.d` where ini files are actually activated


Add your new `php.ini` to the `php-ini` folder in the compose root folder. 

The directory will be scanned for the ini files after the original ini file is parsed and before conf.d files are parsed. 

So, you can override initial file setting or add new ones to the files that are under your VCS.

Here we exploit the fact that PHP_INI_SCAN_DIR can parse a list of directories, separated by a semicolon. 

The `/usr/local/etc/php/conf.d` is from the original image and fits the dockerhub library php default setting. 

*Try checking your base image corresponding setting* by running `docker-compose run –rm php php –ini | grep additional` and replacing the setting value after semicolon with setting from your container. 

Also, if you need something to be changed after the conf.d, just add another directory to the end, also separated by a semicolon.

-------------------

### Refs

[Custom php.ini to the docker library php using docker-compose config](https://sheershoff.ru/custom-php-ini-docker-php-docker-compose-config/)