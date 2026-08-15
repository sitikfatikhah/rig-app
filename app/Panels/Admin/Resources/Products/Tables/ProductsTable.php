<?php

declare(strict_types=1);

namespace App\Panels\Admin\Resources\Products\Tables;

use App\Panels\Admin\Resources\Products\ProductResource;
use PandaPanel\Actions\DeleteAction;
use PandaPanel\Actions\DeleteBulkAction;
use PandaPanel\Actions\EditAction;
use PandaPanel\Actions\ViewAction;
use PandaPanel\Tables\Columns\DateTimeColumn;
use PandaPanel\Tables\Columns\TextColumn;
use PandaPanel\Tables\Enums\SortDirection;
use PandaPanel\Tables\TableSchema;

final class ProductsTable
{
    public static function configure(TableSchema $table): TableSchema
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->toggleable(false),

                DateTimeColumn::make('created_at')
                    ->label('Created')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(ProductResource::class),
                EditAction::make(ProductResource::class),
                DeleteAction::make(ProductResource::class),
            ])
            ->bulkActions([
                DeleteBulkAction::make(ProductResource::class),
            ])
            ->defaultSort('created_at', SortDirection::Descending)
            ->emptyState(
                heading: 'No records yet',
                description: 'Records will appear here once they exist.',
            );
    }
}
