<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DemopackageTest extends TestCase
{
    use DatabaseMigrations;

    public static function setUpBeforeClass()
    {
        echo 'Mikewazovzky\Demopackage Unit Tests ';
    }

    /** @test */
    function it_does_something()
    {
		$this->assertTrue(true);
    }

    /** @test */
    function it_can_see_test_page()
    {
        $this->get('demo/test')
            ->assertSee('test');
    }

    /** @test */
    function facade_works()
    {
        $this->get('demo/hello')
            ->assertSee(\Demopackage::hello());
    }

    /** @test */
    function it_can_read_config_data_and_dispay_it_on_name_page()
    {
		$name = config('mikewazovzky-demo.name');
		$this->get('/name')
			->assertSee($name);
    }

    /** @test */
    function it_creates_items_in_database()
    {
		$item = factory(\Mikewazovzky\Demopackage\Models\Item::class)->create();
		$this->assertCount(1, \Mikewazovzky\Demopackage\Models\Item::all());
        $this->assertDatabaseHas('mikewazovzky_items', [
            'name' => $item->name,
            'description' => $item->description
        ]);
    }

    /** @test */
    function it_displays_database_items_on_index_page()
    {
		$item = factory(\Mikewazovzky\Demopackage\Models\Item::class)->create();
		$this->get('/demo')
			->assertSee($item->name);
    }
}
