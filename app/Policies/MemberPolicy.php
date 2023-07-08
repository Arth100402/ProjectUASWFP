<?php

namespace App\Policies;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response as AccessResponse;

class MemberPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function accessBackend(User $user)
    {
        return ($user->roles[0]->id != 3
            ? AccessResponse::allow()
            : AccessResponse::deny("Anda bukan administrator"));
    }

    public function delete(User $user)
    {
        return ($user->roles[0]->id != 3
            ? AccessResponse::allow()
            : AccessResponse::deny("Anda bukan administrator"));
    }

    public function addToCart(User $user)
    {
        return ($user->roles[0]->id == 3
            ? AccessResponse::allow()
            : AccessResponse::deny("Anda harus mendaftar sebagai member"));
    }

    public function authorizeViewTransaction(User $user, Transaction $transaction)
    {
        return ($user->id == $transaction->user_id
            ? AccessResponse::allow()
            : AccessResponse::deny("Anda tidak bisa melihat transaksi ini"));
    }

    public function authorizeEditProfile(User $user, $id)
    {
        return ($user->id == $id
            ? AccessResponse::allow()
            : AccessResponse::deny("Anda tidak bisa mengubah profile pengguna lain"));
    }
}
