<?php
/**
 * Created by PhpStorm.
 * User: thibaulthenry
 * Date: 26/07/2016
 * Time: 17:08
 */

namespace Tiloweb\Base64Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Base64Type extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null,
            'deleteLabel' => 'Delete'
        ));
    }

    public function getParent()
    {
        return TextType::class;
    }

    public function buildView(FormView $view, FormInterface $form, array $options) {
        parent::buildView($view, $form, $options);

        $view->vars['deleteLabel'] = $options['deleteLabel'];
    }
}
