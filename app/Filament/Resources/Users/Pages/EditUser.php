<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Password;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            Action::make('resetPassword')
                ->label('Send Reset Link')
                ->icon('heroicon-m-lock-closed')
                ->color('warning')
                ->requiresConfirmation()
                ->action(function ($record) {
                    $status = Password::broker(Filament::getAuthPasswordBroker())->sendResetLink(
                        ['email' => $record->email]
                    );

                    if ($status === Password::RESET_LINK_SENT) {
                        Notification::make()->title('Reset link sent successfully')->success()->send();
                    } else {
                        Notification::make()->title('Error sending reset link')->danger()->send();
                    }
                })
        ];
    }
}
