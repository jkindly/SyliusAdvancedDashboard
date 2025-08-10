<?php

declare(strict_types=1);

namespace SyliusHotpayPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class GreetingController extends AbstractController
{
    public function staticallyGreetAction(?string $name): Response
    {
        return $this->render(
            '@SyliusHotpayPlugin/shop/greeting/static.html.twig',
            ['greeting' => $this->getGreeting($name)],
        );
    }

    public function dynamicallyGreetAction(?string $name): Response
    {
        return $this->render(
            '@SyliusHotpayPlugin/shop/greeting/dynamic.html.twig',
            ['greeting' => $this->getGreeting($name)],
        );
    }

    private function getGreeting(?string $name): string
    {
        return match ($name) {
            null => 'Hello!',
            'Lionel Richie' => 'Hello, is it me you\'re looking for?',
            default => sprintf('Hello, %s!', $name),
        };
    }
}
