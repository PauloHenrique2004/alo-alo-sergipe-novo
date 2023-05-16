<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagensExamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagensExamesTable Test Case
 */
class ImagensExamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagensExamesTable
     */
    public $ImagensExames;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ImagensExames'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ImagensExames') ? [] : ['className' => ImagensExamesTable::class];
        $this->ImagensExames = TableRegistry::getTableLocator()->get('ImagensExames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImagensExames);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
