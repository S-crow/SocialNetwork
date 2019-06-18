# SocialNetwork

Prerequisites :
- installation of php, apache web server, mysql, phpmyadmin
- add 2 tables "users" and "messages" on database (via phpmyadmin)
- run the apache web server with these files

issue to connect on phpmyadmin :
create a new user like that :  
#mysql
> GRANT ALL ON *.* TO 'new_username'@'localhost' IDENTIFIED BY 'password_for_new_user';  
> FLUSH PRIVILEGES;  
> quit  
/etc/init.d/apache2 restart  
/etc/init.d/mysql restart  

