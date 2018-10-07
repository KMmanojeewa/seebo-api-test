<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CatalogueTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testCataloguesPageLoad()
    {
        $this->visit('/catalogues')
            ->see('Catalogues List');
    }

    public function  testCatalogueCreate()
    {
        $this->visit('/catalogues')
            ->type('testing catalogue', '#catalogue_name');
    }
}
