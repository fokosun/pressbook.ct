## Install dependencies
- ensure you're in the root directory `/question_3`
- run `composer install`

### How to view this app
 - ensure you're in the root directory `/question_3`
 - create your own database config file `config/database.php`
 example config:
 
 ```
return [
	'default' => 'mysql',
	'connections' => [
		'mysql' => [
            'host' => 'localhost',
			'user' => 'nasa',
			'password' => 'nasa',
			'database' => 'nasa'
		],
	]
];
```

 - run this command to serve the app
 
 ```
php -S localhost:8081
```

- Open `http://localhost:8081` in your browser

## How to run tests
- ensure you're in the root directory `/question_3`
- run the phpunit command

```
php ./vendor/bin/phpunit tests/
```