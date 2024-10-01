<?php

namespace App\DataTransferObjects;

use stdClass;

class ListingDTO {
    public function __construct(
        public int    $itemId,
        public string $title,
        public string $description,
        public float  $price, // Price in euros
        public string $imageURL
    ) {
    }

    public static function fromStdClass(stdClass $stdClass): self {
        return new self(
            69,
            'yeet',
            'lol',
            69,
            'https://google.nl'
        );
    }
}
