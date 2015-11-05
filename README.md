# PROG8180_Assignment2
Web Technologies - Assignment 2

I have tested using Google Chrome Browser, Please review with Chrome Browser.

Part 1

Development Environment: using WAMP Server
  - Database name : pizzeria
  - Table names : orders, users
  - Database access user  : user : root  / password : root
    - Configuration for connection of database was already set in app.php in config folder of CakePHP 
    - Database and table schema are located in the the folder of 'config/schema' in CakePHP structure
      - Schema files name : pizzeria_DB.sql, orders_Table.sql, users_Table.sql
        - pizzeria_DB.sql file includes creating Database, Tables, and insert data already exist
  - I did not allow customer sign out, only employees as admin can access to Order List after Login.
    - Because my concept and understand about the requirements is as below;
    - Customer can only make an order with order page and ask for employee when customer wnat to change order infomation

Pizzeria Web Url 
  - Order page : http://localhost/pizzeria/orders/add
  - Login Page : http://localhost/pizzeria/users/login
    - login access as admin : user name / password --> admin / admin
  - Order list : http://localhost/pizzeria/orders/index  

Park 2
 I implemented responsive web and 4 x 4 matrix. 
Folder Structure of web pages:
  - Part 2
    - css/w3.css
    - img/card images
    - js/script.js
    - index.html
