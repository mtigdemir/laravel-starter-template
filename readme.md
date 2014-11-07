## Laravel Starter Template

  When I start to a new project with Laravel , some of amazing packages unconditionally necessary for it. That's why I cerate my own starter bundle.
  
##What is Include Packages

  - Laravel Framework 4.2 
  - Laravel IDE Helper 
  - Jeffrey Way Generator 
  - Chumper Datatable 
  - Baum Nested Category
  - Cviebrock Eloquent Slugable 
  - Fzaninotto Faker 
  - Jeffrey Way Laravel-Model-Validation
  

##Exist Routes 

  - index(Home Page)
  - /about 
  - /contact
  - /register 
  - /login
  - /dashboard
  - /signin
  - 

##Exist Models

  - User Model 
  - Way\Database\Model will make Validation easier
  - Seo Model 
  - Category Model
  
##Exist Views 

  - Static Pages folder : pages/*
  - Layout Pages folder : layouts/*
  - Error Pages  folder : errors/*
  - User Pages   folder : user/*
  - Email Templates folder : emails/*

##How To Use

## Validation

This package hooks into Eloquent's `save` event, and automatically validates the model's current attributes against the rules that you have set for your model.

Here's an example of setting validation rules for the model:

```php
<?php

class Dog extends Model {
    protected static $rules = [
        'name' => 'required'
    ];

    //Use this for custom messages
    protected static $messages = [
        'name.required' => 'My custom message for :attribute required'
    ];
}
```

Now, simply save the model as you normally would, and let the package worry about the validation. If it fails, then the model's `save` method will return false.

Here's an example of storing a new dog.

```php
public function store()
{
    $dog = new Dog(Input::all());

    if ($dog->save())
    {
        return Redirect::route('dogs.index');
    }

    return Redirect::back()->withInput()->withErrors($dog->getErrors());
}
```

If using Eloquent's static `create` method, you can use the `hasErrors()` methods to determine if validation errors exist.

```php
$dog = Dog::create(Input::all());

if ($dog->hasErrors()) ...

##IDE HELPER

    php artisan ide-helper:generate

    php artisan ide-helper:models

##
        

