<?php

namespace App\Traits;

trait EnumCaseHelper
{

    /**
     * Get the label of enum object
     *
     * @return string
     */
    public function label(): string
    {
        return ucfirst(__($this->value));
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'value' => $this->value,
            'label' => $this->label(),
        ];
    }
}
