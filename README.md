[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

[![License: GPL v3](https://img.shields.io/badge/PHP-7.x-blue.svg)](http://php.net)
[![License: GPL v3](https://img.shields.io/badge/MySQL-%5E5.6-green.svg)](https://www.mysql.com)
[![License: GPL v3](https://img.shields.io/badge/Materialize-0.98.0-orange.svg)](https://materializecss.com/)
<p align="center">
  <img src="https://github.com/ofarukcaki/dataleaks/blob/master/readme-images/logo-dark.png?raw=true" height="78" width="300"/>    
</p>

<center>
  <h1 style="text-align:center;">Data Breach Search Engine</h1>
</center>

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

## Install

First, clone the repo to your server's main directory

    git clone https://github.com/ofarukcaki/dataleaks.git

####  Enter necessary database credentials:
There are 2 databases, one for data breaches and other for users' data.

**./config.php** *line:2*: -> Database settings for  data breaches

    $db  =  new  PDO('mysql:host=<HOST_IP>;dbname=<DATABASE_NAME>','<DB_USER_NAME>','<DB_PASSWORD>');

**./connection.php** *line2*: Authentication database

    try{$db_site = new PDO('mysql:host=localhost;dbname=auth','root','');

## Live Demo
Not available for now, you can edit this README.md file with live install.

---
*There was a referral system and very good-looking referrals page but I lost that version on my corrupted Hard Drive.

I will update with the latest version when I get access again to my HDD.


# Support
### Support the developer and project
*BTC:* **38bfHGSauMEXArpdRrPf2e2DR1fW3HSwAV**  
*ETH:*  **0xfe9D665AD3De716Cb89A946a8d2BF74FeC815c49**  
*LTC:*  **M8XhgUxs7WbGpMJshL9rnFo8KcGwhxtYi1**


---
Logo by [@omergulen](https://github.com/omergulen).  
Dataleaks logo is under licensed, can not be used for neither commercial or personal.


## Disclaimer
Use this script for legal purposes only.

  [![<3](https://forthebadge.com/images/badges/built-with-love.svg)](#)  
