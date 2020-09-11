<?php

namespace ContainerSbaUxV9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeGuesser_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($container->services['validator'] ?? $container->getValidatorService()));
    }
}
