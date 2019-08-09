**SimpleRole**
=

Package that adds a simple role based authentication system to any Laravel project.

**Installing and using**
-------------
`composer require thiagoprz/simple-role`

Run the migration that will add role column to your users table, as:
`php artisan migrate`

>Add roles using Enrollable Trait

```
... 
use Thiagoprz\SimpleRole\Enrollable;
...
class User ...
{
    Use Enrollable;
    ...    
}

```
This trait will add setRole($role) method to the User model and you will be able to update users role with it:

`$user->setRole('admin')`

>Add roles using Laravel standard attributes 

If you don't want to use the Enrollable trait you can add 'role' column to your fillable attributes on User model:

``` 
class User
{
    ...
    protected $fillable = [
        'name', 'email', 'password', ... , 'role',
    ];
    ...    
}

```

Define the different types of role that you will be working and use the middleware to be handle on your routes as shown above:


web.php
``` 
// Route enrolment will be only acessible to "employee" users
Route::get('enrolment', 'EnrolmentController@index')->middleware('role:employee');

// Routes inside Admin namespace will be only acessible to users with the role "admin"
Route::namespace('Admin')->middleware(['auth', 'role:admin'])->group(function() {
...
});

// Routes inside Customer namespace will be only acessible to users with the role "customer"
Route::namespace('Customer')->middleware(['auth', 'role:customer'])->group(function() {
...
});

``` 

A route can require more than one role, to do that you just need to add comma separated roles.
``` 
// Route enrolment will be only acessible to "employee" users
Route::get('product', 'ProductController')->middleware('role:admin,manager,employee');

```


I'm aware of other packages that can do the same with more power allowing multiple roles and other stuff, but this package contains the simplest way of doing that  and will allow small projects to run a simple role based with a small footprint. 