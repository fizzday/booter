Booter
=======
a mini booter of some services, now you can use laravel's orm of eloquent in either php project with this booter

Installation
------------

Use composer to manage your dependencies and download:

```bash
composer require fizzday/booter
```

Example
-------

- 1.Eloquent  
    - config & boot
    ```php
    <?php
    use Fizzday\Booter\Booter;
    $config = array(
                  'default' => 'mysql',
              
                  'connections' => array(
                      'mysql' => array(
                          'driver' => 'mysql',
                          'host' => 'localhost',
                          'port' => '3306',
                          'database' => 'mydb',
                          'username' => 'root',
                          'password' => 'root',
                          'charset' => 'utf8',
                          'collation' => 'utf8_unicode_ci',
                          'prefix' => '',
                      ),
                  );
    Booter::bootEloquent($config);
    ```

- 2.usage   
    - query builder
    ```php
    <?php
    use Illuminate\Database\Capsule\Manager as DB;
    // query builder 调用
    DB::table("users")->First();
    ```

    - model调用
    ```php
    <?php
    use Illuminate\Database\Eloquent\Model as Model;
    class UserModel extends Model {
        protected $table = "prefix_users";
    }
    // eloquent 调用
    UserModel::first();
    ```

Version selection
-------
```
v5.3.23
v5.4.36
v5.5.44
v5.6.39
v5.7.28
v5.8.24
```
these versions alias `illuminate/database` versions.  
```
composer require v5.4.*  
// or
composer require v5.4.36
```
