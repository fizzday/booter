Booter
=======
a mini booter of some services .

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
                          'host' => '192.168.200.248',
                          'port' => '3306',
                          'database' => 'wcc_service_yxpt',
                          'username' => 'gcore',
                          'password' => 'gcore',
                          'charset' => 'utf8',
                          'collation' => 'utf8_unicode_ci',
                          'prefix' => '',
                      ),
                  );
    Booter::bootEloquent($config);
    ```
    - usage   
    ```php
    <?php
    
    use Illuminate\Database\Eloquent\Model as Model;
    use Illuminate\Database\Capsule\Manager as DB;
    
    class UserModel extends Model {
        protected $table = "prefix_users";
    }
    
    // eloquent 调用
    UserModel::first();
    
    // query builder 调用
    DB::table("users")->First();
    ```