<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagesExamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagesExamesTable Test Case
 */
class ImagesExamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagesExamesTable
     */
    public $ImagesExames;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ImagesExames'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ImagesExames') ? [] : ['className' => ImagesExamesTable::class];
        $this->ImagesExames = TableRegistry::getTableLocator()->get('ImagesExames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImagesExames);

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
