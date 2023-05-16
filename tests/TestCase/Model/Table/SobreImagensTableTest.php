<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SobreImagensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SobreImagensTable Test Case
 */
class SobreImagensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SobreImagensTable
     */
    public $SobreImagens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SobreImagens',
        'app.Abouts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SobreImagens') ? [] : ['className' => SobreImagensTable::class];
        $this->SobreImagens = TableRegistry::getTableLocator()->get('SobreImagens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SobreImagens);

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
