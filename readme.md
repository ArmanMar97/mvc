# This is a simple MVC based feedback application

##Prerequisites
- PHP v7.4
- Apache Server
- MySQL(MariaDB)

##Installation

1.Download xampp https://www.apachefriends.org/ru/index.html <br>
Xampp will install latest PHP,Apache and MySQL(MariaDB).

2.Then you should clone this repo to your xampp/htdocs folder <br>

3.Then you should go to xampp/apache/conf folder and open httpd config file. <br>

Change these 2 lines
```
 DocumentRoot "C:/xampp/htdocs/"
 <Directory "C:/xampp/htdocs/">

```
Into these
```
 DocumentRoot "C:/xampp/htdocs/your project folder name/"
 <Directory "C:/xampp/htdocs/your project folder name/">
```
It will change root directory to your folder.<br>
.htaccess file is crucial for this project.It will redirect all routes to your index.php file!

4.You can now start localhost server(Port 80 by default) and mySQL server(Port 3306 by default) from xampp control panel <br>

##Database Info

1.All methods related to database are in config/db.php file   <br>
Once you created a database you can manually set const DB to your database name,so it will be <br>
your default db.

```php
    const HOST = "localhost";
    const USER = "root";
    const PASSWORD = "";
    const DB = "";
```
createPostTable and createAdminTable methods will create post and admin tables respectively with all required columns <br>
After creating admin table you should create admin user by createAdminUser method.
Warning! Admin and Posts table shouldn't be named differently

---
**WARNING!**
Admin and Posts table shouldn't be named differently.
___
