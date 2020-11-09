<?php


namespace QuizProcessing\Struct;


class Student extends AbstractBaseStruct implements ProfileInterface, ContactInterface, AddressInterface
{
    public function getAddress(): string
    {
        // TODO: Implement getAddress() method.
    }

    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

    public function getType(): string
    {
        // TODO: Implement getType() method.
    }

    public function getEmail(): string
    {
        // TODO: Implement getEmail() method.
    }

    public function getFirstName(): string
    {
        // TODO: Implement getFirstName() method.
    }

    public function getLastName(): string
    {
        // TODO: Implement getLastName() method.
    }
}