<?php

namespace Container1AWT4xH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Listener_PasswordHasherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.listener.password_hasher' shared service.
     *
     * @return \Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'PasswordHasher'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'PasswordHasherListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'UserPasswordHasherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'UserPasswordHasher.php';

        return $container->privates['form.listener.password_hasher'] = new \Symfony\Component\Form\Extension\PasswordHasher\EventListener\PasswordHasherListener(new \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService'))), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));
    }
}
