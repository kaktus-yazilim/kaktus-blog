<?php

namespace App\Models\Map;

use App\Models\DB;
use App\Models\Entity;

class User
{

    /**
     * @param DB\User $userData
     * @return Entity\User
     */
    public static function mapUser(DB\User $userData)
    {
        $user = new Entity\User;

        $user->setId($userData->id);
        $user->setUserName($userData->user_name);
        $user->setEmail($userData->email);

        if (isset($userData->first_name) && isset($userData->last_name)) {
            $user->setFirstName($userData->first_name);
            $user->setLastName($userData->last_name);
            $user->setFullName($user->getFirstName() . ' ' . $user->getLastName());
        }

        if (isset($userData->created_at)) {
            $user->setCreatedAt($userData->created_at);
        }

        if (isset($userData->updated_at)) {
            $user->setUpdatedAt($userData->updated_at);
        }

        return $user;
    }
}