<?php

declare(strict_types=1);

namespace App\Panels\Admin\Resources\Products;

use App\Models\Product;
use App\Panels\Admin\Resources\Products\Forms\ProductForm;
use App\Panels\Admin\Resources\Products\Pages\CreateProduct;
use App\Panels\Admin\Resources\Products\Pages\EditProduct;
use App\Panels\Admin\Resources\Products\Pages\ListProducts;
use App\Panels\Admin\Resources\Products\Pages\ViewProduct;
use App\Panels\Admin\Resources\Products\Tables\ProductsTable;
use PandaPanel\Forms\FormSchema;
use PandaPanel\Resources\Resource;
use PandaPanel\Tables\TableSchema;

final class ProductResource extends Resource
{
    protected static string $model = Product::class;

    protected static ?string $navigationIcon = 'folder';

    protected static int $navigationSort = 0;

    public static function table(TableSchema $table): TableSchema
    {
        return ProductsTable::configure($table);
    }

    public static function form(FormSchema $schema): FormSchema
    {
        return ProductForm::configure($schema);
    }

    /**
     * @return array<string, class-string>
     */
    public static function pages(): array
    {
        return [
            'index' => ListProducts::class,
            'create' => CreateProduct::class,
            'view' => ViewProduct::class,
            'edit' => EditProduct::class,
        ];
    }
}
