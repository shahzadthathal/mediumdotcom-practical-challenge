<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTets extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGettingAllArticles()
    {
            $response = $this->json('GET', '/api/articles');
            $response->assertStatus(200);
            $response->assertJson(['message'=> "All articles api working."]);
            $response->assertJsonStructure(
                [
                    [
                        'title',
			            'slug',
			            'image',
			            'description',
			            'clap',
			            'author',
			            'topic_title',
			            'topic_slug',
			            'clap',
			            'created_at',
			            'reading_time',
                    ]
                ]
            );
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGettingLatestArticles()
    {
            $response = $this->json('GET', '/api/latest/articles');
            $response->assertStatus(200);
            $response->assertJson(['message'=> "Latest api working."]);
            $response->assertJsonStructure(
                [
                    [
                        'title',
			            'slug',
			            'image',
			            'description',
			            'clap',
			            'author',
			            'topic_title',
			            'topic_slug',
			            'clap',
			            'created_at',
			            'reading_time',
                    ]
                ]
            );
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGettingFeaturedArticles()
    {
            $response = $this->json('GET', '/api/featured/articles');
            $response->assertStatus(200);
            $response->assertJson(['message'=> "Featured api working."]);
            $response->assertJsonStructure(
                [
                    [
                        'title',
			            'slug',
			            'image',
			            'description',
			            'clap',
			            'author',
			            'topic_title',
			            'topic_slug',
			            'clap',
			            'created_at',
			            'reading_time',
                    ]
                ]
            );
    }

     /**
     * A basic test example.
     *
     * @return void
     */
    public function testGettingTopicWiseArticles()
    {
            $response = $this->json('GET', '/api/topic/wise/articles');
            $response->assertStatus(200);
            $response->assertJson(['message'=> "Topic wise api working."]);
            $response->assertJsonStructure(
                [
                    [
                        'title',
			            'slug',
			            'image',
			            'description',
			            'clap',
			            'author',
			            'topic_title',
			            'topic_slug',
			            'clap',
			            'created_at',
			            'reading_time',
                    ]
                ]
            );
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGettingPopularArticles()
    {
            $response = $this->json('GET', '/api/popular/articles');
            $response->assertStatus(200);

            $response->assertJson(['message'=> "Propular api working."]);

            $response->assertJsonStructure(
                [
                    [
                        'title',
			            'slug',
			            'image',
			            'description',
			            'clap',
			            'author',
			            'topic_title',
			            'topic_slug',
			            'clap',
			            'created_at',
			            'reading_time',
                    ]
                ]
            );
    }
}
