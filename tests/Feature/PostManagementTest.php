<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\requirement;

class PostManagementTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function a_user_requirement_be_created() {
        $response = $this->post('/users', [
        'description' => 'Título del test',
        'offer_id' => '0'
        ]);
        // Primero comprobamos que todo ha ido bien
        $response->assertStatus(200);
        // Comprobamos que hay 1 registro en la BD (se ha insertado)
        $this->assertCount(1, requirement::all());
        // Y comprobamos que sea el que acabamos de insertar
        $post = Post::first();
        $this->assertEquals($post->description, 'Título del test');
        $this->assertEquals($post->offer_id, '0');
        $this->withoutExceptionHandling();
        $response->assertRedirect('/requirement/' . $requirement->id);
       }
    
    public function a_requirement_can_be_retrieved() {
        $this->withoutExceptionHandling();
        $post = factory(requirement::class)->create();
        $response = $this->get('/requirement/' . $requirement->id);
        $response->assertStatus(200);
        $post = requirement::first();
        $response->assertViewIs('requirement.show');
        $response->assertViewHas('requirement', $requirement);
       }
    
    public function a_requirement_can_be_deleted() {
        $this->withoutExceptionHandling();
        $requirement = factory(requirement::class)->create();
        $response = $this->delete('/requirement/' . $requirement->id);
        // Comprobamos que hay 0 registros en la BD (se ha insertado)
        $this->assertCount(0, requirement::all());
        $response->assertRedirect('/requirement/');
       }   
    
    public function post_title_is_required() {
        $response = $this->requirement('/requirement', [
            'description' => '',
            'offer_id' => '0'
        ]);
        $response->assertSessionHasErrors(['title']);
       }
      
        
    public function post_content_is_required() {
        $response = $this->requirement('/requirement', [
            'description' => '',
            'offer_id' => '0'
        ]);
        $response->assertSessionHasErrors(['content']);
       }
}
