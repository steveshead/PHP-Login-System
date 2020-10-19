# Secure Login and Registration using PHP, MySQL and Ajax
This is a simple but secure login and registration system built by following a tutorial, and adapted to use PDO. It uses PHP, MySQL and Ajax, and was written using OOP principles.

There is a Bootstrap version and a UIKIT version included, each in a separate folder.  You will need to change the links in whichever system you choose to match your directory structure should you choose to use this.

There is a database folder with the database (sql) file in it that will create the database and tables needed for this to work.  If you change the database name in the SQL file remember to change the database name in the database class file also (/inc/classes/DB.php), same goes for database user and password.

#### Classes Used:
- DB (database)
- Page
- User
- Filter (has some useful resuable filters)

#### User Account:
- Dashboard
- Profile with user details
- Logout button

#### Other functions
- Menu changes dependent on whether you are logged in, or not
- Uses the latest password security functions of PHP

Feel free to use it, improve it or do whatever you need with it.  I had fun building it.
