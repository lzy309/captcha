<?php


namespace Hyperf\Captcha;


use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\SessionInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;

class CaptchaFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class);
        $session = $container->get(SessionInterface::class);
        return make(Captcha::class, compact('config', 'session'));
    }
}