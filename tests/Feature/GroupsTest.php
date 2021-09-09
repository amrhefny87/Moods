<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use App\Models\Group;
use Carbon\Factory;
use Tests\TestCase;

class GroupsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_group_can_be_created()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/groups', [
            'name'=>'test'
        ]);

        $response->assertOk();
        $this->assertCount(1, Group::all());

        $group= Group::first();

        $this->assertEquals($group->name, 'test');
    }

    /** @test */
    public function list_of_groups_can_be_retrieved()
    {
        $this->withoutExceptionHandling();
        Group::factory(3)->create();
        $response = $this->get('/groups');
        $response->assertOk();
        $groups = Group::all();
        $response->assertViewIs('groups');
        $response->assertViewHas('groups', $groups);
    }

    /** @test */
    public function a_group_can_be_deleted()
    {
        $this->withoutExceptionHandling();
        Group::factory(1)->create([
            'id'=>1
        ]);
        $response = $this->get('/groups');
        //dd($response);
        $this->assertCount(1, Group::all());
        
        $response = $this->delete('/groups/1');
        //dd($response);
        $this->assertCount(0, Group::all());
    }
    
    
    
}
