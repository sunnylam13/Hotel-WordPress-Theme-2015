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

You can modify `functions.php` to temporarily allow bigger file sizes for importing *while the theme you put this code in is active*.

Otherwise the standard `php.ini` enforced limit is like 2MB.

So if an exported wp file is larger you can't use it during migrations or backups.

```
@ini_set( 'upload_max_size' , '128M' );

@ini_set( 'post_max_size', '128M');

@ini_set( 'max_execution_time', '300' );
```