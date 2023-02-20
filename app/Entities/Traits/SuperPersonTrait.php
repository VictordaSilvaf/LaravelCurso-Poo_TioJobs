<?php

namespace App\Entities\Traits;

trait SuperPersonTrait
{
    public string $gender = '';

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }
}
