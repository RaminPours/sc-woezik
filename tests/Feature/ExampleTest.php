<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $this->get('/')->assertOk();
    }

    public function test_old_form_submission_redirects_to_the_page(): void
    {
        $this->post('/', ['achternaam' => 'Voorbeeld'])
            ->assertStatus(303)
            ->assertRedirect('/');

        $this->get('/')->assertOk()->assertDontSee('value="Voorbeeld"', false);
    }
}
