<?php

//Hint - Dependency Inversion Principle
abstract class Mailer
{

}

class SendWelcomeMessage
{
    private $mailer;
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

//SendWelcomeGoolge
//SendWelcomeSendgrid
//SendWelcomeMailchimp
