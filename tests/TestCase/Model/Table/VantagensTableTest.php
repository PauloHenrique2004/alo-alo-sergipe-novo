<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VantagensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VantagensTable Test Case
 */
class VantagensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VantagensTable
     */
    public $Vantagens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Vantagens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Vantagens') ? [] : ['className' => VantagensTable::class];
        $this->Vantagens = TableRegistry::getTableLocator()->get('Vantagens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vantagens);

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
