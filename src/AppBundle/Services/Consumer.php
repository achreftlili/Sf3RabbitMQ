<?php

namespace AppBundle\Services;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqplib\Message\AMQPMessage;

class Consumer implements ConsumerInterface
{
    public function execute(AMQPMessage $message)
    {
        $body = json_decode(unserialize($message->body));
        echo sprintf("received message: first name: '%s' last name: '%s' \n", $body->firstName, $body->lastName);
    }
}
