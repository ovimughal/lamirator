# Lamirator
Create Laminas, Lamirest module (oRest, oapi) with one console command

# Install
1. Open terminal
2. Go to you root directory
```bash
cd /path/of/your/application
(e.g cd /var/www/Laminas-App)
```
3. Run below composer command
```bash
composer require ovimughal/lamirator
```

# Start Using
From app root directory enter: <br>
```bash
./vendor/bin/lamirator create:module -m <Your-Module-Name>
```
<strike>

# For simplicity (Optional)
1. create a php file in you application root (e.g lamirator.php)
2. Open it in your favourite text-editor
3. Paste following line
```php
<?php
require __DIR__.'/vendor/ovimughal/lamirator/app/console.php';
```
   And save
4. Now from your terminal simply enter:
```bash
php lamirator.php create:module -m <Your-Module-Name>
```
</strike>

   And your Laminas Module is ready to use <br>
   # Options
   1. `-m <Module-Name>` (Default is `SkeletonModule`)
   2. `-t <Type>` (Type is either `zf3` or `oapi` or `oRest`, default is `zf3`, any other type other than `oapi` or `oRest`  will consider `zf3`)
   # Note
   `zf3` is default Laminas Module, since no mechanism is provided to auto generate this module as was available in ZF2 Eclipse PDT or Zend Studio, I kept option here.<br>
   `oapi` is ZF3's `AbrstractRestfulController` based module where we can handle REST easily.<br>
   `oRest` is awesome ZF3's `AbstractActionController` based module. An easey to use and your loved `Action` based approach.<br>
   By having `Lamirest` module installed you will get `Token` based mechanism, `AccessControlList(ACL)`, `Doctrine`, `ExceptionHandling`, `ApiValidation` & much more out of the box.
   
5. Test in your browser `http://hostname:port/yourapp/yourmodule` no configuration needed.
6. Enjoy :)

# For `Lamirest` Module users
1. For installation <a href='https://github.com/ovimughal/lamirest'>Lamirest</a>
2. Once you are up with installation, from your root directory type in following command in terminal<br>
    `zf3-module.php oapi:serve` (zf3-module.php is the file we created above in step 1)<br>
   This will serve Lamirest module & do all the necessary configurations automatically<br>
   Also some config files will be generated for you.
3. For `doctrine` to work properly we need to tell it the location of Entities<br>
   Paste following in any `module\<module-name>\config\module.config.php` return array
```php  
'doctrine' => [ 
    'driver' => [
        __NAMESPACE__ . '_driver' => [
            'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
            'cache' => 'array',
            'paths' => [__DIR__ . '/../src/Entity']
        ],
        'orm_default' => [
            'drivers' => [
                __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
            ],
        ],
    ],
],
```

4. You are Done :)