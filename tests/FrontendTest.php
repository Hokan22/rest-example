<?php

class FrontendTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRootUri()
    {
        $this->get('/');

        $this->assertEquals(
            'Lumen RESTful API for Coding Task', $this->response->getContent()
        );
    }
}
