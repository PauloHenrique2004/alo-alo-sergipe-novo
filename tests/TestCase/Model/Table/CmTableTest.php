<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CmTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CmTable Test Case
 */
class CmTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CmTable
     */
    public $Cm;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cm'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cm') ? [] : ['className' => CmTable::class];
        $this->Cm = TableRegistry::getTableLocator()->get('Cm', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cm);

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
