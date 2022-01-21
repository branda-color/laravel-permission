<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Article;
use Illuminate\Auth\Access\HandlesAuthorization;


class UserPolicy
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

    /**
     * 定義權限操作
     */
    public function view(User $user, Article $article)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function delete(User $user, Article $article)
    {
        return $user->id == $article->userid;
    }

    public function update(User $user, Article $article)
    {
        return $user->id == $article->userid;
    }
}
