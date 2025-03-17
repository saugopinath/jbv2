<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CodeMasterResource\Pages;
use App\Filament\Resources\CodeMasterResource\RelationManagers;
use App\Models\CodeMaster;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class CodeMasterResource extends Resource
{
    protected static ?string $model = CodeMaster::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Create Master Data';

    public static function form(Form $form): Form
    { 
        // dd(CodeMaster::whereNull('parent_id')->pluck('name', 'id')->toArray());
        return $form
        
            ->schema([
                TextInput::make('name')
                ->required()
                ->maxLength(255),

            TextInput::make('short_name')
                ->required()
                ->maxLength(255),

            Checkbox::make('is_parent')
                ->label('Is Parent?')
                ->live(), // Enables real-time UI updates

             Select::make('parent_id')
                ->label('Parent Name')
                ->options(fn () => CodeMaster::whereNull('parent_id')->pluck('name', 'id'))
                ->reactive() // Updates dynamically
                ->required(fn (Get $get) => !$get('is_parent')) // Required if not a parent
                ->hidden(fn (Get $get) => $get('is_parent')), // Hide if "is_parent" is checked
               
                
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                ->label('ID')
                ->sortable()
                ->state(fn ($rowLoop) => $rowLoop->index + 1),

                TextColumn::make('name')
                ->label('Name')
                ->sortable()
                ->searchable(),

                TextColumn::make('parent.name') // Fetch the parent's name
                ->label('Parent Name')
                ->sortable()
                ->default('NULL'), // Show NULL if there's no parent
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
            'index' => Pages\ListCodeMasters::route('/'),
            'create' => Pages\CreateCodeMaster::route('/create'),
            'edit' => Pages\EditCodeMaster::route('/{record}/edit'),
        ];
    }
}
