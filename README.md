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