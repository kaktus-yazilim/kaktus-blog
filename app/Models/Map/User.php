<?php

namespace App\Models\Map;

use App\Models\DB;
use App\Models\Entity;

class User
{

    /**
     * @param DB\User $user
     * @return Entity\User
     */
    public static function map(DB\User $user)
    {
        $entityUser = new Entity\User;

        foreach (Entity\User::COLUMNS as $column => $value) {
            if (isset($user->$column)) {
                $entityUser->$value($user->$column);
            }
        }

        return $entityUser;
    }
}