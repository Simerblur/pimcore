<?php
namespace AppBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class LocalePrefixListener implements EventSubscriberInterface
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();
        
//        switch ($_SERVER['HTTP_HOST']) {
//            case 'advox-remake.dev':
//                $request->setLocale('pl');
//                break;
//            case 'advox-remake-en.dev';
//                $request->setLocale('en');
//                break;
//        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 255]],
        ];
    }
}