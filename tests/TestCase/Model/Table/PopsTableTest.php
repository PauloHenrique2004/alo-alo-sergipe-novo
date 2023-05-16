<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PopsTable Test Case
 */
class PopsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PopsTable
     */
    public $Pops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pops'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pops') ? [] : ['className' => PopsTable::class];
        $this->Pops = TableRegistry::getTableLocator()->get('Pops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pops);

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
