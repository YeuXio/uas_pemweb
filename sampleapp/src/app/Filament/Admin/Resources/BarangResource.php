<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BarangResource\Pages;
use App\Models\Barang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Barang';
    protected static ?string $pluralModelLabel = 'Daftar Barang';
    protected static ?string $modelLabel = 'Barang';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Barang')
                    ->required()
                    ->maxLength(255),

                TextInput::make('kode')
                    ->label('Kode Barang')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(100),

                TextInput::make('stok')
                    ->label('Jumlah Stok')
                    ->numeric()
                    ->required()
                    ->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama Barang')->searchable()->sortable(),
                TextColumn::make('kode')->label('Kode Barang')->sortable(),
                TextColumn::make('stok')->label('Stok')->sortable(),
                TextColumn::make('created_at')->label('Dibuat')->dateTime('d M Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
}

