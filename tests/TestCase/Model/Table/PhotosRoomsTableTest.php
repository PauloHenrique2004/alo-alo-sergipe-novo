<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhotosRoomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhotosRoomsTable Test Case
 */
class PhotosRoomsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PhotosRoomsTable
     */
    public $PhotosRooms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PhotosRooms',
        'app.Rooms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PhotosRooms') ? [] : ['className' => PhotosRoomsTable::class];
        $this->PhotosRooms = TableRegistry::getTableLocator()->get('PhotosRooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PhotosRooms);

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
