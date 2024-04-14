<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        /*$this->get('/user/1') ->seeJson([
            'created' => true,
         ]);
*/
         /*$this->json('POST', '/user', ['name' => 'Sally'])
             ->seeJson([
                'created' => true,
             ]);
        */
        $formData = ['name' => 'John'];

        // Simulate a POST request to the submitForm route with form data
        $response = $this->post('/submit-form', $formData)->seeJson([
            'name' => 'John',
         ]);

    }
}
