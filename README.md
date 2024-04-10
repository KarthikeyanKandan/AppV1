
## Technologies Used
- `HTML`
- `CSS`
- `JavaScript`
- `Bootstrap5`
- `PHP`
- `MySQL`
- `Webhooks by zapier`
- `mpdf`



## Files
- *home.php* -- The main page showed after login. Edit your own homepage.
- *index.php* -- The main page showed before login.
- *login.php* -- Login Page.
- *signup.php* -- Signup Page.
- *edit.php* -- Edit your profile.
- *logout.php* -- Logout to the dashboard page.
- *consent.php* -- Digital consent form 

## Features

* Stores passwords in DB
* Passwords are hashed and stored (You can't view the original password of the user).
* Username and email validation is done.
* Digital consent form with translation
* Downloadable consent form as pdf feature
* Email remainders with webhooks.


## Instructions to use

- Download all the source files to your computer.
- Install Xampp and run MYSQL and Apache server
- Create a DataBase as login in phpMyAdmin.
- Create users table in phpMyAdmin.
- Change the username and password in connection.php file to root.
- Import the [login.sql](login.sql) file in the phpMyAdmin.
- Run server and access via localhost.
