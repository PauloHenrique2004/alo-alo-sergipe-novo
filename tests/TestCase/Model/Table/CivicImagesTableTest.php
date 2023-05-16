<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CivicImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CivicImagesTable Test Case
 */
class CivicImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CivicImagesTable
     */
    public $CivicImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CivicImages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CivicImages') ? [] : ['className' => CivicImagesTable::class];
        $this->CivicImages = TableRegistry::getTableLocator()->get('CivicImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CivicImages);

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
