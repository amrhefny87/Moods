<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Group;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_list_of_user_can_be_retrieved()
    {
        $this->withoutExceptionHandling();
        User::factory(3)->create();
        $response=$this->get('/users');
        $response->assertOk();
        // $this->assertCount(3, User::all());
        $users = User::all();
        $response->assertViewIs('users');
        $response->assertViewHas('users', $users);
    }

    /** @test */
    public function a_user_can_be_added_to_a_group(){
        $user = User::factory()->create();
        $group =Group::factory()->create();
        // $group_id = $group->id;
        // dd($group->id);
        $response = $this->get('/users');
        // dd($response);
        // $response->assertOk();
        $this->assertCount(1, User::all());
        // $user->group_id = $group->id;
        // $group->users()->attach($user);
        $response = $this->patch('/users/1', [
            'group_id' => 1
        ]);
        $user=User::first();
        // dd($user);
        // dd($response->id);
        $this->assertEquals($user->group_id,1);
    }
    
}
