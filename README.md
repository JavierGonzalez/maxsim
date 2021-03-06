# maxsim 0.5

Maximum Simplicity Framework


### Features
* 0.2 ms.
* Hello World! In one line.
* URL routing by File System.
* Autoload files with prefix `+` and suffix `.php .js .css .ini .json`.
* Autoload files inside a directory with prefix `+`, recursively.
* Template selection with: `$maxsim['output'] = 'template';`
* Framework core in a 123-line single file called: `$maxsim.php`


### Used in
- **[POL](https://github.com/JavierGonzalez/POL)** A democratic voting community.
- **[BMP](https://github.com/JavierGonzalez/BMP)** A Bitcoin hashpower voting system.


### To know
* In development!
* Minimum required: `.htaccess` and `$maxsim.php`.
* Framework info in array `$maxsim`.
* Server-Timing header for performance debug.
* Reserved functions, variables and constants starting with `maxsim`.
* URL directories beyond the app file are in: `$_GET[1] $_GET[2] ..`
* Autoload `css` and `js` files are included in the template.
* `ini` files are loaded with a constant named with the file name.
* `json` files are loaded with a variable named with the file name.
* 404 error when app print is null.
* Access denied for any file name containing `password`.
* Framework app url redirection with: `$maxsim['redirect'] = '/url';`
* Text-plain output with: `exit;` or `$maxsim['output'] = 'text';`
* JSON API output when `$echo` is array and `$maxsim['output'] = 'json';`.
* Simple, short, lightweight, snake_case, procedural first, flexible, expansible, old school.


### Future features
* Docker.
* Debugger.
* IDE inside.
* Users system.
* ORM and SQL client.
* Code and app marketplace.


### Tested environment
* PHP 8
* GNU/Linux CentOS 7.8 x86_64
* Apache
* MySQL, MariaDB


Javier González González <gonzo@virtualpol.com>