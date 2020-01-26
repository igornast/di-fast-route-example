<?php declare(strict_type=1);


namespace App\Model;


use JsonSerializable;

class Item implements JsonSerializable
{
    private $id;

    private $name;

    public static function create(int $id, string $name): self
    {
        $obj = new self();
        $obj->id = $id;
        $obj->name = $name;

        return $obj;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return ['id' => $this->id, 'name' => $this->name];
    }
}