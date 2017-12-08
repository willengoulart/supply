<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PromocoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PromocoesTable Test Case
 */
class PromocoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PromocoesTable
     */
    public $Promocoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.promocoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Promocoes') ? [] : ['className' => PromocoesTable::class];
        $this->Promocoes = TableRegistry::get('Promocoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Promocoes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
