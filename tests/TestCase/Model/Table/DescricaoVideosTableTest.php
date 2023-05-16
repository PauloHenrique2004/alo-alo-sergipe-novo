<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DescricaoVideosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DescricaoVideosTable Test Case
 */
class DescricaoVideosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DescricaoVideosTable
     */
    public $DescricaoVideos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DescricaoVideos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DescricaoVideos') ? [] : ['className' => DescricaoVideosTable::class];
        $this->DescricaoVideos = TableRegistry::getTableLocator()->get('DescricaoVideos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DescricaoVideos);

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
