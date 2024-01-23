<?php

namespace Tests\Feature\Context\Site;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateShortUrlTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_short_url_e2e(): void
    {
        $response = $this->get('/api/v1/short-urls', [
            'url' => 'https://example.com'
        ]);

        $response->assertJsonFragment([
            'url' => 'http://tinyurl.com/ylx5uce'
        ], 200);
    }
}