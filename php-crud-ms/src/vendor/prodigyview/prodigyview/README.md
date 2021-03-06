# ProdigyView: The Toolkit For Building Micro: Frameworks / Applications / Services

Welcome to the ProdigyView Toolkit, a powerful PHP enhancement tool designed to make PHP coding faster, less mundane and highly extendable. This document will go over how to install the toolkit, use some of the features, and extend objects with the built-in design patterns.

## Installation

Installation can be done either with Composer or downloading the packages manually.

### Composer

The easy way to install the application is with composer. Start by running the require command in composer

```bash
composer require prodigyview/prodigyview
```

After it has successfully been installed, simply make sure the autoload generated by Composer is being included in your application.

```php
<?php
include_once ('/path/to/vendor/autoload.php');
?>
```

And you are done!

### Manual Installation

If you wish to install manually without a package manager, the task is fairly easy.

##### 1) Download The Application

In this git repo, there are several version available for download. Download the latest and put it in a folder in your project.

##### 2) Include The ClassLoader

Inside the main folder, there is a file called _classLoader.php. Include that file any page you want use the toolkit like so:

```php
include_once ('/path/to/toolkit/_classLoader.php');
```

And you are done with the installation.

## Learning Resources
Before getting into the examples below, there are several materials available to help you learn how to use the toolkit:

1. The Blog: https://medium.com/helium-mvc
2. Examples: https://github.com/ProdigyView-Toolkit/examples
3. Documentation: https://prodigyview-toolkit.github.io/docs/
4. MVC Created Using The Toolkit: https://github.com/Helium-MVC/Helium

Please feel free to use any of the resources to help you get started.

## Tools vs. Design Patterns

ProdigyView has two key elements to use with development. There first is the toolset designed to make every day easier, and the second is its ability to extend classes and add design patterns of Adapters, Filters, and Observers to class.

### Toolkit Examples

Below are various examples of how the toolkit can make programming easier with built-in functions:

##### Get A File Mime Type
```php
<?php
$mime = PVFileManager::getFileMimeType($file);
?>
```

##### Validate If A File Is An Image
```php
<?php
$is_image = PVValidator::check('image_file', $mime); ?>
?>
```

##### Execute a CURL post
```php
<?php
$url = 'http://api.example.com';
$data = array('abc' => '123');
$communicator = new PVCommunicator();
$communicator ->send('post',  $url, $data);
```

##### Is an Ajax Request and Mobile Request
```php
<?php
$request = new PVRequest();
$is_ajax = $request -> isAjaxRequest();
$is_mobile = $request -> isMobile();
```

And a lot of other tools from hashing, generating a random string, connecting with databases, etc. Using these tools can help speed up your application development.

## RoadMap

Forks and contributors are more than welcome!!!!

- Redo the PVDatabase. Seperate into different classes per database and potentially used DI or another pattern for referencing connection. Important to allow connection pooling to continue in implementation. Checkout the db_rewrite branch.
- Work on PVCommunicator SOAP and Socket Implementation
- Add namespacing into the system.

## Development Principles

For hardcore developers that focus on IoC, S.O.L.I.D and other principles, this section is for you.As you get started with ProdigyView, it is good to understand some of the principles behind the framework.

1.  [A New Approach To Inversion of Control ](https://medium.com/helium-mvc/a-new-approach-to-inversion-of-control-with-prodigyview-e15a34cff0d "A New Approach To Inversion of Control ")
2. [Programming Principles For Early Stage Startups](https://medium.com/helium-mvc/programming-principles-for-early-stage-startups-1215ad14bcb8 "Programming Principles For Early Stage Startups")
3. [How Helium and ProdigyView Is Designed For Startups](https://medium.com/helium-mvc/how-helium-and-prodigyview-is-designed-for-startups-a0e4c53edd32 "How Helium and ProdigyView Is Designed For Startups")
4.  [Debunking The Myth Of Static Classes, Methods and Variables](https://medium.com/helium-mvc/debunking-the-myth-of-static-classes-methods-and-variables-8059472a1bc7 "Debunking The Myth Of Static Classes, Methods and Variables")

### Application Design Patterns

Another great feature the toolkit provides is helping you to extend and better design your applications. The framework focuses on 3 design patterns that can be implemented on any object: Adapters, Observers,
Intercepting Filters.

#### Adapters
Adapters are is a design pattern that is meant as an alternative to Dependency Injection. Adapters allow you to change the underlying functionality of an object without directly manipulating the code of the object.

https://medium.com/helium-mvc/the-adapter-pattern-a-replacement-to-dependency-injection-835c9bfbe4f4

#### Observers
Observers allow other objects to subscribe to an objects actions and be notified when actions are executed.
https://medium.com/helium-mvc/observer-design-pattern-others-apps-are-following-you-ef5553b61f77

#### Intercepting Filters
The Intercepting Design Pattern allows both pre-processing and post-processing of variables within a function.




