# How to run server
 - Install php dependencies : `composer install` 
 - Launch web server : `bin/console server:run`
 
 # Database help
 - create table :
 `php bin/console doctrine:query:sql "CREATE TABLE post(id INTEGER PRIMARY KEY, title STRING, content STRING, date DATE, author STRING, picture STRING)"`
 - add row :
 `php bin/console doctrine:query:sql "INSERT INTO post VALUES(1, 'title', 'content', '10-11-12', 'author', 'picture')"`
