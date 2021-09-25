<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use App\Models\Group;
use App\Models\User;
use Carbon\Factory;
use Tests\TestCase;

class GroupsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_group_can_be_created_only_by_admin()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create([
            'is_admin'=>1
        ]);
        $this->actingAs($user);
        
        $response = $this->post('/groups', [
            'name'=>'test'
        ]);
        // $response->assertOk();
        $this->assertCount(1, Group::all());
        $group= Group::first();
        $this->assertEquals($group->name, 'test');
    }

    /** @test */
    public function list_of_groups_can_be_retrieved_only_by_admin()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create([
            'is_admin'=>1
        ]);
        $this->actingAs($user);
        Group::factory(3)->create();
        $response = $this->get('/groups');
        // $response->assertOk();
        $groups = Group::all();
        $response->assertViewIs('groups');
        $response->assertViewHas('groups', $groups);
    }

    /** @test */
    public function a_group_can_be_deleted_only_by_admin()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create([
            'is_admin'=>1
        ]);
        $this->actingAs($user);
        Group::factory(1)->create([
            'id'=>1
        ]);
        $response = $this->get('/groups');
        // $response->assertOk();
        $this->assertCount(1, Group::all());
        $response = $this->get('/groups/1');
        $this->assertCount(0, Group::all());
    }
    
    
    
}
