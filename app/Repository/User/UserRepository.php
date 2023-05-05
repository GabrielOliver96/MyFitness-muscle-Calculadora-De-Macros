<?php

namespace App\Repository\User;

use App\Repository\User\IUserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements IUserRepository
{
    private $_user;

    public function __construct(User $user)
    {
        $this->_user = $user;
    }

    public function create($user): User
    {
        return $this->_user->create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
            'gender' => 0,
            'age' => 0,
            'weight' => 0,
            'stature' => 0,
            'activity_rate_factor' => 0,
            'objective' => 0,
            'type_of_diet' => 0,
            'imc' => 0,
            'water' => 0,
            'basal_metabolic_rate' => 0,
            'daily_calories' => 0,
            'daily_protein' => 0,
            'daily_carbohydrate' => 0,
            'daily_fat' => 0,
            'daily_protein_kcal' => 0,
            'daily_carbohydrate_kcal' => 0,
            'daily_fat_kcal' => 0
        ]);
    }

    public function update($user, $id)
    {
        return $this->_user->where('id', $id)->update([
            'gender' => $user['gender'],
            'age' => $user['age'],
            'weight' => $user['weight'],
            'stature' => $user['stature'],
            'activity_rate_factor' => $user['activity_rate_factor'],
            'objective' => $user['objective'],
            'type_of_diet' => $user['type_of_diet'],
            'imc' => $user['imc'],
            'water' => $user['water'],
            'basal_metabolic_rate' => $user['basal_metabolic_rate'],
            'daily_calories' => $user['daily_calories'],
            'daily_protein' => $user['daily_protein'],
            'daily_carbohydrate' => $user['daily_carbohydrate'],
            'daily_fat' => $user['daily_fat'],
            'daily_protein_kcal' => $user['daily_protein_kcal'],
            'daily_carbohydrate_kcal' => $user['daily_carbohydrate_kcal'],
            'daily_fat_kcal' => $user['daily_fat_kcal']
        ]);
    }
}