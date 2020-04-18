<?php


namespace App\Modules\User\Entity;


use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class User extends Authenticatable
{
    private string $id;
    private ?string $name;
    private string $status;
    private string $email;
    private string $passwordHash;

    public function create()
    {
        $this->id = Str::uuid();
    }
}
