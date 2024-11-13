<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EquipaResource\Pages;
use App\Filament\Resources\EquipaResource\RelationManagers;
use App\Models\Equipa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class EquipaResource extends Resource
{
    protected static ?string $model = Equipa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'Equipa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                MarkdownEditor::make('descricao'),
                FileUpload::make('imagem')->disk('public')->directory('imgPost'),
                TextInput::make('slug'),
                Checkbox::make('active')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                TextColumn::make('descricao'),
                ImageColumn::make('imagem'),
                CheckboxColumn::make('active')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListEquipas::route('/'),
            'create' => Pages\CreateEquipa::route('/create'),
            'edit' => Pages\EditEquipa::route('/{record}/edit'),
        ];
    }
}
