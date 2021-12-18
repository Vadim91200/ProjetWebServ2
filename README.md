# Projet Web Serveur 2

**Requirements :**
- install Wamp on https://www.wampserver.com/#download-wrapper the 64 bits version
- Configure your virtualhost : 
![image](https://user-images.githubusercontent.com/75336673/146658129-f46f95ea-af78-4320-b6b2-a987c93ca9a5.png)
![image](https://user-images.githubusercontent.com/75336673/146658254-0024037e-f0ef-47ba-aac4-0a3ab11a5106.png)
- install https://www.sqlite.org/download.html including the command-line shell https://www.sqlite.org/2021/sqlite-tools-win32-x86-3360000.zip (but we already did that for you so you have nothing to do)

**Initialise database for the first time :** 
connect to the url http://projetwebserv2/src/init_database

**To Sign up : ** 
![image](https://user-images.githubusercontent.com/75336673/138466501-68b9eaec-be98-440c-9849-6313f0f7c18f.png)

Fill the form and click on Sign in then connect with your email and your password.

**To see information of your database** : open sqlite.exe

**Then typed : **
Close existing database and reopen FILE :												                        sqlite> .open database.db 
The ".databases" command shows a list of all databases open in the current connection : sqlite> .databases
List names of tables matching LIKE pattern TABLE : 										                  sqlite> .tables
SELECT statement to query data from one or more table :									                sqlite> select * from user 
