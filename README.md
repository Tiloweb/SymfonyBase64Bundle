Usage
=====

This Bundle made easy to use the Doctrine\Paginator method to optimally paginate your requests. The pagination always use the `GET $page` to control on wich page you are, so you don't have to worry about the route.

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require tiloweb/base64-bundle "dev-master"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Tiloweb\Base64Bundle\TilowebBase64Bundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: TODO
---------------------------------