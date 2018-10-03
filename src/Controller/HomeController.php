<?php

namespace App\Controller;

use App\Message\SendNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(MessageBusInterface $bus)
    {

        $bus->dispatch(new SendNotification('notification', ['ahmedbhs1@gmail.fr', 'test@gmail.com']));

        return $this->render('home/index.html.twig');
    }
}
