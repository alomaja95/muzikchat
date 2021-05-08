<?php

namespace App\Broadcasting;

use App\Models\User;
use App\Models\Connect;

class ChatChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param \App\Models\User $user
     * @param Connect $connect
     * @return array|bool
     */
    public function join(User $user, Connect $connect)
    {

        return $user->id === $connect->mentee_id || $user->id === $connect->mentor_id;
    }
}
