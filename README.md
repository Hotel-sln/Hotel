# Hotel Menton
Site internet du fameux Hotel Bogdanoff

# Pré-Requis 
- PHP 7.3.xx
- MariaDB 10.4.xx
- PHPMyAdmin 4.9.x

# Installation 
○ Clôner le repository : 
```bash
git clone https://github.com/Hotel-sln/Hotel.git
```

○ Créer un config.conf
- Copier 
``` config_sample.conf``` dans le dossier hotel/php
- Renommer ``` config_sample.conf``` en ``` config.conf```
- Remplacer les identifiants de connexion par :

``` 
define('SERVER', 'localhost');
define('NAME', 'hotel_menton');
define('USER', '[user]');
define('PASSWD', '[mot de passe]');
  $server = 'localhost';
  $name ='hotel_menton'; 
  $user='[user]';
  $passwd='[mot de passe]';
```
    
○ Dans PHPMyAdmin, importer :
```
create_bdd.sql
create_reservations.sql
create_users.sql
```
