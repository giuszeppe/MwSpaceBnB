<?php

namespace Tests\Feature;

use App\Models\Apartment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

function mysort($arr, $order)
{
    if ($order == 'asc')
        sort($arr);
    else
        rsort($arr);
    return $arr;
}


class ViewTest extends TestCase
{
    use RefreshDatabase;
    protected $seed = true;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_homepage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_get_search()
    {
        $response = $this->get('/search');
        $response->assertStatus(200);
    }
    public function test_post_search()
    {
        $response = $this->call('post', '/search', ['title' => 'Appartamento']);
        $data = $response->getOriginalContent()->getData();
        $this->assertCount(11, $data['apartments']);

        //test degli ordinamenti
    }
    public function test_post_search_order()
    {
        $orders = ['numero_bagni_asc', 'numero_bagni_desc', 'numero_stanze_asc', 'numero_stanze_desc', 'numero_letti_asc', 'numero_letti_desc', 'metri_quadrati_asc', 'metri_quadrati_desc'];
        foreach ($orders as $order) {
            $esploso = explode('_', $order);
            $verso = $esploso[2];
            $orderKey = $esploso[0] . '_' . $esploso[1];
            $arr = [];
            $response = $this->call('post', '/search', ['order' => $order]);
            $data = $response->getOriginalContent()->getData()['apartments'];
            $data->each(function ($item, $key) use ($orderKey, &$arr) {
                $arr[] = $item->$orderKey;
            });
            $this->assertEquals(mysort($arr, $verso), $arr);
        }
    }
    public function test_post_search_servizi()
    {
        $servizi = DB::table('servizi')->get();
        foreach ($servizi as $servizio) {
            $nome_servizio = $servizio->nome_servizio;
            $response = $this->call('post', '/search', ['servizi' => [$nome_servizio]]);
            $data = $response->getOriginalContent()->getData()['apartments'];
            $data->each(function ($item, $key) use ($nome_servizio) {
                $this->assertContains($nome_servizio, explode(',', $item->servizi_aggiuntivi));
            });
        }
    }
    public function test_guest_detail()
    {
        $response = $this->get('/apartment/' . 1);
        $response->assertStatus(200);
    }
    public function test_guest_index()
    {
        $response = $this->get('/apartment');
        $response->assertStatus(302);
    }
    public function test_guest_message()
    {
        $response = $this->get('apartment/1/message');
        $response->assertStatus(302);
    }
    public function test_guest_create_store()
    {
        $response = $this->get('/apartment/create');
        $response->assertStatus(302);
        $response = $this->post('apartment');
        $response->assertStatus(302);
    }
    public function test_guest_delete()
    {
        $response = $this->delete('/apartment/1');
        $response->assertStatus(302);
    }
    public function test_guest_update()
    {
        $response = $this->put('apartment/1');
        $response->assertStatus(302);
    }
    public function test_guest_stat()
    {
        $response = $this->get('/apartment/1/stat');
        $response->assertStatus(302);
    }
}
