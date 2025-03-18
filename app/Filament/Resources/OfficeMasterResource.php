<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfficeMasterResource\Pages;
use App\Filament\Resources\OfficeMasterResource\RelationManagers;
use App\Models\Block;
use App\Models\Codemaster;
use App\Models\District;
use App\Models\OfficeMaster;
use App\Models\Subdivision;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\select;

class OfficeMasterResource extends Resource
{
    protected static ?string $model = OfficeMaster::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Create Master Data';

    public static function form(Form $form): Form
    {
        //dd(District::where('state_id','19')->pluck('name', 'id')->toArray());
        // dd( Codemaster::where('parent_id', Codemaster::where('short_name', 'office_type')->value('id'))
        // ->pluck('short_name', 'id')->toArray());
        //dd( Block::where('district_id','306')->pluck('name', 'id'));

        return $form

            ->schema([
                Hidden::make('state_id') 
                ->default(19),  
                
                Select::make('office_type')
                ->label('Office Type')
                ->options(fn () => Codemaster::where('parent_id', Codemaster::where('short_name', 'office_type')->value('id'))->pluck('name', 'id'))
                // ->afterStateUpdated(fn (Set $set, Get $get) => dd('Selected Office Type:', $get('office_type')))
                ->afterStateUpdated(function (Set $set) {
                    $set('district_id', null);
                    $set('block_id', null);
                    $set('subdivisions_id', null);})

                ->required()
                ->reactive() ,

            TextInput::make('name')
                ->required()
                ->maxLength(255),

            TextInput::make('address')
                ->required()
                ->maxLength(255),
            TextInput::make('zip')
                ->required()
                ->maxLength(255),
            
            Select::make('district_id')
                ->label('District Name')
                ->options(District::where('state_id', '19')->pluck('name', 'id'))
                ->required()
                ->reactive()
                ->afterStateUpdated(function (Set $set) {
                    $set('block_id', null);
                    $set('subdivisions_id', null);}) 
                ->hidden(fn (Get $get) =>empty($get('office_type')) || !in_array(
                    Codemaster::where('id', $get('office_type'))->value('name') ?? '',['BLOCK OFFICE', 'DISTRICT OFFICE', 'SUBDIVISION OFFICE']
                    )
                ),

                // ->hidden(fn (Get $get) => 
                // !in_array(
                //     Codemaster::where('id', $get('office_type'))->value('name'), 
                //     [ 'BLOCK OFFICE', 'DISTRICT OFFICE', 'SUBDIVISION OFFICE']
                //     )
                // ), 
                // ->hidden(fn (Get $get) => 
                //     Codemaster::where('id', $get('office_type'))->value('name') !== 'DISTRICT OFFICE' 
                //     ),
                // ->hidden(fn (Get $get) => $get('office_type') == 'STATE OFFICE'),// Hide for state
            
            Select::make('block_id')
                ->label('Block Name')
                ->options(fn ($get) => $get('district_id') 
                    ? Block::where('district_id', $get('district_id'))->pluck('name', 'id') 
                    : [])
                ->required()
                ->reactive()
                ->hidden(fn (Get $get) =>empty($get('office_type')) || Codemaster::where('id', $get('office_type'))->value('name') !== 'BLOCK OFFICE' )
                ->disabled(fn ($get) => !$get('district_id')),

            select::make('subdivisions_id')
                ->label('Subdivision Name')
                ->options(fn ($get) => $get('district_id')? Subdivision::where('district_id', $get('district_id'))
                ->pluck('name', 'id'): [])
                ->required()
                ->reactive() 
                ->hidden(fn (Get $get) =>empty($get('office_type')) ||Codemaster::where('id', $get('office_type'))->value('name') !== 'SUBDIVISION OFFICE' )
                ->disabled(fn (Get $get) => !$get('district_id')),


            // Select::make('district_id')
            //     ->label('District Name')
            //     ->options(fn () => District::where('state_id','19')->pluck('name', 'id'))
            //     ->required()
            //     ->reactive() 
            //     ->afterStateUpdated(fn ($set) => $set('block_id', null)),
            // select::make('block_id')
            //     ->label('Block Name')
            //     ->options(fn (Get $get) => Block::where('district_id', $get('district_id'))->pluck('name', 'id'))
            //     ->required()
            //     ->reactive() 
            //     ->disabled(fn (Get $get) => !$get('district_id')),

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

                TextColumn::make('address')
                ->label('Address')
                ->sortable()
                ->searchable(),

                TextColumn::make('officeType.name') 
                ->label('Office Type')
                ->sortable()
                ->default(''),
                TextColumn::make('district.name') 
                ->label('District Name')
                ->sortable()
                ->default(''),
                TextColumn::make('block.name') 
                ->label('Block Name')
                ->sortable()
                ->default(''),
                TextColumn::make('subdivision.name')
                ->label('Subdivision Name')
                ->sortable()
                ->default(''),

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
            'index' => Pages\ListOfficeMasters::route('/'),
            'create' => Pages\CreateOfficeMaster::route('/create'),
            'edit' => Pages\EditOfficeMaster::route('/{record}/edit'),
        ];
    }
}
