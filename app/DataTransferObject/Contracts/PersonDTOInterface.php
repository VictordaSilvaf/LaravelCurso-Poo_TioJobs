<?php

namespace App\DataTransferObject\Contracts;

interface PersonDTOInterface
{
    public function getName(): string;
    public function getDocument(): string;
    public function getGender(): string;
}
