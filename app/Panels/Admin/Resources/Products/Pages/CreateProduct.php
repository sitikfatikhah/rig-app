<?php

declare(strict_types=1);

namespace App\Panels\Admin\Resources\Products\Pages;

use App\Panels\Admin\Resources\Products\ProductResource;
use PandaPanel\Resources\Pages\CreateRecord;

final class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
}
