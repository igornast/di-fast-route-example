<?php declare(strict_type=1);


namespace App\Service;


use App\Model\Item;

class ItemService
{
    public function getSample(): Item
    {
        return Item::create(1, 'Test Sample');
    }

    public function getSampleList(): array
    {
        return [
            Item::create(1, 'Test Sample #1'),
            Item::create(2, 'Test Sample #2'),
            Item::create(3, 'Test Sample #3')
        ];
    }
}