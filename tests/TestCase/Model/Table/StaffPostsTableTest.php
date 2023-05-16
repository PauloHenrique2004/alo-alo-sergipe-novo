<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StaffPostsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StaffPostsTable Test Case
 */
class StaffPostsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StaffPostsTable
     */
    public $StaffPosts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.StaffPosts',
        'app.Staffs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StaffPosts') ? [] : ['className' => StaffPostsTable::class];
        $this->StaffPosts = TableRegistry::getTableLocator()->get('StaffPosts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StaffPosts);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
