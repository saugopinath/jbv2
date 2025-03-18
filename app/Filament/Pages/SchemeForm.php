<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

class SchemeForm extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static bool $shouldRegisterNavigation = false;
    protected static string $view = 'filament.pages.scheme-form';

    public $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }
    protected function getFormSchema(): array
    {
        return [
            Wizard::make()
                ->steps([
                    Step::make('Personal Details')
                        ->schema([
                            TextInput::make('aadhaar_number')
                                ->label('Aadhaar Number')
                                ->numeric()
                                ->required()
                                ->maxLength(12),
                            TextInput::make('beneficiary_name')
                                ->label('Beneficiary Name')
                                ->required()
                                ->maxLength(255),
                            Select::make('gender')
                                ->label('Gender')
                                ->options([
                                    'male' => 'Male',
                                    'female' => 'Female',
                                    'other' => 'Other',
                                ])
                                ->required(),
                            DatePicker::make('dob')
                                ->label('Date of Birth')
                                ->required(),
                        ]),

                    Step::make('Contact Details')
                        ->schema([
                            TextInput::make('mobile_number')
                                ->label('Mobile Number')
                                ->tel()
                                ->required()
                                ->maxLength(10),
                            TextInput::make('email')
                                ->label('Email Address')
                                ->email()
                                ->maxLength(255),
                            Textarea::make('address')
                                ->label('Address')
                                ->rows(3)
                                ->required(),
                        ]),

                    Step::make('Bank Details')
                        ->schema([
                            TextInput::make('bank_name')
                                ->label('Bank Name')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('account_number')
                                ->label('Account Number')
                                ->numeric()
                                ->required()
                                ->maxLength(20),
                            TextInput::make('ifsc_code')
                                ->label('IFSC Code')
                                ->required()
                                ->maxLength(11),
                        ])
                ])
        ];
    }
    public function save()
    {
        $data = $this->form->getState();
        Notification::make()
            ->title('Success!')
            ->body('Scheme details have been saved successfully.')
            ->success()
            ->send();
        $this->form->fill([]);
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data');
    }
}