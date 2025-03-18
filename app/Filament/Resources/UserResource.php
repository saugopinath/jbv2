<?php

namespace App\Filament\Resources;
use Filament\Forms;

use App\Models\User;
use Filament\Tables;
use App\Models\Scheme;
use Filament\Forms\Form;
use App\Models\Codemaster;
use Filament\Tables\Table;
use App\Models\OfficeMaster;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Illuminate\Database\Eloquent\Builder;
use App\Forms\Components\SchemeDropdownField;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Personal Details')
                        ->schema([
                            TextInput::make('fullname')
                            ->label('Full Name')
                            // ->required()
                            ->maxLength(255),

                            TextInput::make('fullname_aadhar')
                            ->label('Full Name (as in Aadhar)')
                            // ->required()
                            ->maxLength(255),

                        TextInput::make('display_name')
                            ->label('Display Name')
                            // ->required()
                            ->maxLength(255),

                        TextInput::make('email')
                            ->email()
                            ->unique('users', 'email')
                            // ->required()
                            ->maxLength(255),


                            TextInput::make('mobile_number')
                            ->label('Mobile Number')
                            ->numeric()
                            // ->required()
                            ->minLength(10)
                            ->maxLength(10),

                        ]),


                        Wizard\Step::make('Role & Scheme')
                        ->schema([
                            Select::make('role_id')
                                ->label('Select Role')
                                ->options(fn () => Role::pluck('name', 'id')->toArray())
                                ->searchable(),

                            Select::make('scheme_id')

                                ->label('Scheme')
                                ->options(fn () => Scheme::where('is_active', 1)->pluck('name', 'id')->toArray())
                                ->searchable()
                                // ->required(),
                        ]),


                    Wizard\Step::make('Office')
                    ->schema([

                        Select::make('office_type')
                            ->label('Office Type')
                            ->options(fn () => Codemaster::where('parent_id', 80)->pluck('name', 'id')->toArray())
                            ->searchable()
                            ->reactive()
                            ->live(),


                        Select::make('office_id')
                            ->label('Office Name')
                            ->options(fn (callable $get) =>
                                OfficeMaster::where('office_type', $get('office_type'))
                                    ->pluck('name', 'id')
                                    ->toArray()
                            )
                            ->searchable()
                            ->reactive(),
                    ])


                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
