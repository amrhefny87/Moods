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
        $this->assertCount(3, User::all());
        $users = User::all();
        // $response->assertViewIs('users');
        // $response->assertViewHas('users', $users);
    }

    /** @test */
    public function a_user_can_be_an_impostor(){
        $this->withoutExceptionHandling();
        $user = User::factory()->create([
            'id'=>1
        ]);
        
        $response = $this->get('/users');
        $response->assertOk();
        $this->assertCount(1, User::all());
        
        $response = $this->put('/users/1', [
            'impostor' => FALSE
        ]);

        $user=User::first();
        
        $this->assertEquals($user->impostor,0);
    }

    /** @test */
    public function a_user_can_be_added_to_a_group()
    {
        $this->withoutExceptionHandling();
        $users = User::factory(3)->create();
        $group = Group::factory(2)->create();


        $response = $this->post('/users_link', [
            'users'=>$users[1]->id,
            'group'=>$group[0]->id       
        ]);
        
        $user = User::find($users[1]->id);
        
        $this->assertEquals($user->group_id,1);

    }

    /** @test */
    public function a_user_can_be_removed_from_a_group()
    {
        $this->withoutExceptionHandling();
        $group = Group::factory(1)->create();
        $users = User::factory(1)->create([
            'group_id'=>1
        ]);

        $response = $this->post('/users_unlink', [
            'users'=>$users[0]->id
        ]);
        $user = User::find($users[0]->id);
        $this->assertEquals($user->group_id,null);


    }
    
    
    


    
}
