<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    public function user() {
        return $this->hasMany(User::class);
    }

    public function project() {
        return $this->hasMany(Project::class);
}

    // public static function find(int $id): array
    // {
    //     $department = Arr::first(Static::all(), fn($job) => $department['id' == $id]);

    //     if (! $department){
    //         abort(404);
    //     }

    // }
};