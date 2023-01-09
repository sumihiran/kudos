<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

//uses(RefreshDatabase::class);

it('should_return_a_successful_response', function() {
    $response = $this->get('/');
    expect($response->status())->toBe(200);
});
