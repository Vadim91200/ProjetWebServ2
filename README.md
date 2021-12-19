# Projet Web Serveur 2 

A secure PHP login system made from scratch with protections against several common attacks

<h3>Requirements :</h3> 
<li> Install Wamp on https://www.wampserver.com/#download-wrapper the 64 bits version <br>
<li> Configure your virtualhost :

![image](https://user-images.githubusercontent.com/75336673/146658129-f46f95ea-af78-4320-b6b2-a987c93ca9a5.png)
![image](https://user-images.githubusercontent.com/75336673/146658254-0024037e-f0ef-47ba-aac4-0a3ab11a5106.png) <br>
<li>Install https://www.sqlite.org/download.html including the command-line shell https://www.sqlite.org/2021/sqlite-tools-win32-x86-3360000.zip (but we already did that for you so you have nothing to do)

**Initialise database for the first time**  : <br>
 connect to the Url : http://URL_NAME_YOU_GIVEN/init_database


**To Sign Up** : 
![image](https://user-images.githubusercontent.com/75336673/138466501-68b9eaec-be98-440c-9849-6313f0f7c18f.png)

Fill the form and click on Sign in then connect with your email and your password.


<h3>To see information of your database :</h3> Open sqlite.exe

Then typed : <br>
**sqlite> .open database.db** : _Close existing database and reopen FILE <br>_
**sqlite> .databases**       : _The ".databases" command shows a list of all databases open in the current connection  <br>_
**sqlite> .tables**           : _List names of tables matching LIKE pattern TABLE <br>_
**sqlite> select * from user** : _SELECT statement to query data from one or more table <br>_

<h3>Features / Protections :</h3> 
  
<li> Login / Sign Up <br>
<li> All passwords are hashed so that even with access to the database attackers could not obtain users passwords (passwords are hashed and salted) <br>
<li> Possibility to add a new product to the Shop page
<li> All features are protected from SQL Injection using PHP prepared statements
