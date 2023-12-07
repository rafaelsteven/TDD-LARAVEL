<?php

namespace Tests\Unit\Models;

use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{

    public function test_has_many_repositories(): void
    {
        $user = new User;

        $this->assertInstanceOf(Collection::class,$user->repositories);
    }
}
