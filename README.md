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
``` bdd_sample.conf``` dans le dossier Hotel/config
- Renommer ``` bdd_sample.php``` en ```bdd.php```
- Remplacer les identifiants de connexion par :

``` 
define('DB_HOST', 'localhost');
define('DB_NAME', 'hotel_menton');
define('DB_USER', '[user]');
define('DB_PASSWORD', '[mot de passe]');

```
    
○ Dans PHPMyAdmin, importer :
```
script_BDD/hotel_mentonV2.sql
```
