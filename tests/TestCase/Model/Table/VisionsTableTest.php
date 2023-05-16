<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisionsTable Test Case
 */
class VisionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VisionsTable
     */
    public $Visions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Visions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Visions') ? [] : ['className' => VisionsTable::class];
        $this->Visions = TableRegistry::getTableLocator()->get('Visions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Visions);

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
