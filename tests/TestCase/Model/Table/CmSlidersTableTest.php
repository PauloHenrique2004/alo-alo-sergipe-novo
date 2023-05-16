<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CmSlidersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CmSlidersTable Test Case
 */
class CmSlidersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CmSlidersTable
     */
    public $CmSliders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CmSliders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CmSliders') ? [] : ['className' => CmSlidersTable::class];
        $this->CmSliders = TableRegistry::getTableLocator()->get('CmSliders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CmSliders);

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
