<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlbunsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlbunsTable Test Case
 */
class AlbunsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlbunsTable
     */
    public $Albuns;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Albuns',
        'app.Fotos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Albuns') ? [] : ['className' => AlbunsTable::class];
        $this->Albuns = TableRegistry::getTableLocator()->get('Albuns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Albuns);

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
