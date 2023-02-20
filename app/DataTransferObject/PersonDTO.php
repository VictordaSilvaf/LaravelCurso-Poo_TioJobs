<?php

namespace App\DataTransferObject;

use stdClass;

class PersonDTO implements Contracts\PersonDTOInterface
{
    public function __construct(
        private readonly stdClass $properties,
        private string            $name = '',
        private string            $document = '',
        private string            $gender = ''
    )
    {
        $this->name = $this->properties->name;
        $this->document = $this->properties->document;
        $this->gender = $this->properties->gender;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */

    public function getDocument(): string
    {
        return $this->document;
    }
}
