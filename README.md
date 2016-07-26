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

Step 3: Add the default twig theme
----------------------------------

Add the default twig theme for the form in you `app/config/config.yml`.

```yml
# app/config/config.yml

twig:
    form_themes:
        - 'TilowebBase64Bundle:form:fields.html.twig'
```

Step 4 : Configure your form type
---------------------------------

```php
<?php
// src/AppBundle/Form/ImageType.php

use Tiloweb\Base64Bundle\Form\Base64Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("avatar", Base64Type::class, array(
                'label' => 'Avatar'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Avatar',
        ));
    }

    public function getName()
    {
        return 'avatar';
    }
}
```

Step 5 : Enjoy !
----------------

Now, your form will show an file input. When you select an image, the preview is updated. If the field is not required, a "delete" button is shown. When the form is submited, you'll receive the base64 url of the image.