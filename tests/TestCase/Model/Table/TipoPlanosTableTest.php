<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoPlanosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoPlanosTable Test Case
 */
class TipoPlanosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoPlanosTable
     */
    public $TipoPlanos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TipoPlanos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TipoPlanos') ? [] : ['className' => TipoPlanosTable::class];
        $this->TipoPlanos = TableRegistry::getTableLocator()->get('TipoPlanos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoPlanos);

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
