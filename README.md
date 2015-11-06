# PROG8180_Assignment2
##Web Technologies - Assignment 2

I have tested using Google Chrome Browser, Please review with Chrome Browser.

##Part 1

###Development Environment: using WAMP Server
  - **Database name** : pizzeria
  - **Table names** : orders, users
  - **Database access user**  : user : **root**  / password : **root**
    - Configuration for connection of database was already set in app.php in config folder of CakePHP 
    - Database schema are located in the the folder of 'config/schema' in CakePHP structure
      - **Schema files name** : **pizzeria_DB.sql** which includes creating Database, Tables, and insert data already exist
  - I did not allow customer to sign out, only employees as admin can access to Order List after Login.
    - Because my concept and understanding about the requirements is as below;
    - Customer can only make an order with order page and ask for employee when customer wnat to change order infomation
  - I did not implement to validate specific details such as the wrong url address.

###Pizzeria Web Url 
  - **Order page** : ```http://localhost/pizzeria/orders/add```
  - **Login Page** : ```http://localhost/pizzeria/users/login```
    - login access as admin : user name / password --> admin / admin
      - above pizzeria_DB.sql includes admin data in users table
      - if users table has no data of admin, can add the add page as below;
        - http://localhost/pizzeria/users/add
  - **Order list** : ```http://localhost/pizzeria/orders/index```
    - Order list can be shown after login as admin/admin

##Part 2

I implemented responsive web and 4 x 4 matrix, using JQuery, and adapted to responsive web with W3.CSS. 

###Folder Structure of web pages is as below:
```
  - Part 2
    - css/w3.css
    - img/card images
    - js/script.js
    - index.html
    ```
