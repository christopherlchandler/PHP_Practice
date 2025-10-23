# PHP Practice Project

This is a simple PHP practice project used to learn basic PHP syntax, classes, and GitHub version control.  
It currently includes a small example demonstrating how to create and use a `Fruit` class.

---

## 🚀 Features
- Basic PHP class example (`Fruit`)
- Simple HTML and PHP integration
- Demonstrates how to use `require_once`
- Practice for Git commits and GitHub pushes

---

## 🧠 How It Works
The `Fruit` class defines a fruit with a name and color.
You can set and get the fruit's name using class methods.

Example:
```php
require_once 'Fruit.php';

$apple = new Fruit();
$apple->set_name('Apple');
echo $apple->get_name(); // Output: Apple
