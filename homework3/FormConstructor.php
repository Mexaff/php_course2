<?php

interface FormConstructorInterface
{
    public function render(): string;
}

class FormConstructor implements FormConstructorInterface
{
    private $fields = [];

    public function __set($propetyName, $propertyValue)
    {
        $this->fields += [$propetyName => $propertyValue];
    }

    public function render(): string
    {
        $formHtml = '<form>';
        foreach ($this->fields as $name => $value) {
            $formHtml .= sprintf(
                '<input type="text" name="%s" value="%s"/>',
                $name,
                $value
            );
        }
        $formHtml .= '</form>';

        return $formHtml;
    }
}

$formConstructor = new FormConstructor();

$formConstructor->first_name = 'Your first name';
$formConstructor->last_name = 'Your last name';
$formConstructor->email = 'Email address';
$formConstructor->address = 'Street address';

echo $formConstructor->render();