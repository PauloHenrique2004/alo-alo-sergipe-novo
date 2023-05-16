<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectsImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectsImagesTable Test Case
 */
class ProjectsImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectsImagesTable
     */
    public $ProjectsImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProjectsImages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProjectsImages') ? [] : ['className' => ProjectsImagesTable::class];
        $this->ProjectsImages = TableRegistry::getTableLocator()->get('ProjectsImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectsImages);

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
