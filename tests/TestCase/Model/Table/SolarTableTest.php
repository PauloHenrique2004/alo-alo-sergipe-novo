<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolarTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolarTable Test Case
 */
class SolarTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolarTable
     */
    public $Solar;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Solar'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Solar') ? [] : ['className' => SolarTable::class];
        $this->Solar = TableRegistry::getTableLocator()->get('Solar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Solar);

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
