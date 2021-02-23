# PHP_basics
First step for learning php 
## Deal with mysql database

* chage the cofig file: **xampp/phpmyadmin/config.inc.php** as given below:
```
$cfg['Servers'][$i]['controluser']  = 'root';   
$cfg['Servers'][$i]['controlpass']  = '';
$cfg['Servers'][$i]['auth_type']    = 'config';
$cfg['Servers'][$i]['user']         = 'root';
$cfg['Servers'][$i]['password']     = '';
$cfg['Servers'][$i]['AllowNoPassword'] = true;
``` 
[Here no password is set]
Thanks
