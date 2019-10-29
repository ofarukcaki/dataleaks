[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)   
<p align="center">
  <img src="https://github.com/ofarukcaki/dataleaks/blob/master/readme-images/logo-dark.png?raw=true" height="78" width="300"/>    
</p>

<center>
  <h1 style="text-align:center;">Data Breach Search Engine</h1>
</center>

[Read the announcement](#this-repository-isnt-maintained-and-i-wont-provide-any-support-from-now-on-if-you-read-everything-carefully-i-explained-how-to-install-it-you-wont-face-any-problems-if-you-do-everything-as-should-be)

I developed this website once and decided to open source it.

## Features

 - Search data by **email**, **password**, **ip address**, etc.
 -  Subscription based user system (Only subscribed members can view the whole data)
 - Cookie based **Referral system**    see*
 - PHP (backend)
 - SQL (database)
 - Materialize (front-end)
 
# Screnshoots

 - **Main Page(visitor)**
 ![Main page](https://github.com/ofarukcaki/dataleaks/blob/master/readme-images/main_visitor.png?raw=true)

- **Data Search Example**
![Data breach searchquery](https://github.com/ofarukcaki/dataleaks/blob/master/readme-images/search.gif?raw=true)

- **Login/Register**
![Login Page](https://github.com/ofarukcaki/dataleaks/blob/master/readme-images/login.png?raw=true)

- **Referral System**
![Referral System](https://raw.githubusercontent.com/ofarukcaki/dataleaks/master/readme-images/affiliate.png)

- **Others**
![TOS](https://github.com/ofarukcaki/dataleaks/blob/master/readme-images/tos.png?raw=true)

## Requirements
- PHP 7.x
- MySQL
- PHP PDO extension

## Install

First, clone the repo to your server's main directory. Or download the zip and extract

    git clone https://github.com/ofarukcaki/dataleaks.git

####  Enter necessary database credentials:
There are 2 databases, one for data breaches and other for users' data.

**./config.php** *line:2*: -> Database settings for  data breaches
  - create a database and enter your credentials, this will be the database which stores the datas(aka breaches). Import the exampleSite_com.sql file located on /databases/ folder to your database and use the same format for your next tables. 

    ```$db  =  new  PDO('mysql:host=<HOST_IP>;dbname=<DATABASE_NAME>','<DB_USER_NAME>','<DB_PASSWORD>');```

**./connection.php** *line2*: Authentication database
  - Create a "auth" database and enter credentials on connection.php file. This database is for authentication and user related stuff. aAfter creating the database import the sample users.sql file located on /databases/users.sql and use the same structure.

    ```{$db_site = new PDO('mysql:host=localhost;dbname=auth','root','');```
    

# F.A.Q

### How do I import new databases?
- You can simply create new tables under dataleaks database, every unique table represents databases -breaches-

### I imported the sample table but when I make a search there is no results?
- Searching is case sensitive. If your data on your table is "User123" and you can searhc for "user123" there will be no result show up

### Can I import new breaches usin admin panel?
- There is **no** admin panel or so. This requires a basic sql knowledge. You can import using cli interface of mysql or use tools like navicat.

### I receive an error and its not working?
- Check the requirements again on top of this page

### I need help/ I have aquestion?
- [Create an issue here](https://github.com/ofarukcaki/dataleaks/issues). So others may help


# This repository isn't maintained and I won't provide any support from now on. If you read everything carefully I explained how to install it, you won't face any problems if you do everything as should be. 

## And please do not send me an email related to support. Create an issue here instead, that also doesn't mean I'll take care of them


---
Logo by [@omergulen](https://github.com/omergulen).  
Dataleaks logo can not be used for neither commercial or personal.


## Disclaimer
Use this script for legal purposes only.

  [![<3](https://forthebadge.com/images/badges/built-with-love.svg)](#)  
