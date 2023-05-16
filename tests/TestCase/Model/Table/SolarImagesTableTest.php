<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolarImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolarImagesTable Test Case
 */
class SolarImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolarImagesTable
     */
    public $SolarImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SolarImages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SolarImages') ? [] : ['className' => SolarImagesTable::class];
        $this->SolarImages = TableRegistry::getTableLocator()->get('SolarImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SolarImages);

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
