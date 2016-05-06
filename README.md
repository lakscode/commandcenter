Command center is a PHP, jQuery, MySQL tool to display the selected tweets randomly.

Data will be downloaded and stored in the MySQL DB.

modify the Config/db.php file and configure db details

Create a DB 'commandcenter'

Execure the DB script (config/commandcenter.sql)

in db.php you can select whether the data is from mysql db or json

if json, then the data should be stored in a file in config folder as twitter.json (config/twitter.json)