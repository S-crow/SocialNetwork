# SocialNetwork

Prerequisites :
- installation of php, apache web server, mysql, phpmyadmin
- add 2 tables "users" and "messages" on database (via phpmyadmin)
- run the apache web server with these files

Issues :  
-connect on phpmyadmin :  
create a new user like that :    
#mysql
> GRANT ALL ON *.* TO 'new_username'@'localhost' IDENTIFIED BY 'password_for_new_user';  
> FLUSH PRIVILEGES;  
> quit  
/etc/init.d/apache2 restart  
/etc/init.d/mysql restart  

-insert data on database :  
add "none" for id attribute and tick the AI case (to automatic increment)  

![alt text](https://github.com/S-crow/SocialNetwork/blob/master/phpmyadmin.png "PhpMyAdmin")

