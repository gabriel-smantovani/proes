<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $cabecaPadraoId = 1;
        $trajePadraoId = 2;

        $existem = DB::table('avatares')->whereIn('id', [$cabecaPadraoId, $trajePadraoId])->count() === 2;

        if ($existem) {
            DB::table('avatar_user')->insert([
                [
                    'user_id' => $user->id,
                    'avatar_id' => $cabecaPadraoId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'user_id' => $user->id,
                    'avatar_id' => $trajePadraoId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
