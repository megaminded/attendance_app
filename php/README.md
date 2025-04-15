## Create a dbConfig.php file

- create a Dbconfig class, Example:

```php
<?php
class DbConfig{
    protected $hostname = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'attendance_management_project';
}
```

## Create a database and a user table

- Create a file
- Use the crud model to help create your database and table