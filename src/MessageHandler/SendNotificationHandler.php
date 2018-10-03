<?php
namespace App\MessageHandler;

use App\Message\SendNotification;
use Swift_Mailer;

class SendNotificationHandler
{
    /**
     * @var Swift_Mailer
     */
    private $mailer;

    public function __construct(Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(SendNotification $notification)
    {
        foreach ($notification->getUsers() as $user) {
            echo 'The mail has been sent with success !';
            $message = (new \Swift_Message('Mail object'))
                ->setFrom('send@gmail.com')
                ->setTo($user)
                ->setBody(
                    $notification->getMessage()
                )
            ;

            $this->mailer->send($message);

        }
    }
}