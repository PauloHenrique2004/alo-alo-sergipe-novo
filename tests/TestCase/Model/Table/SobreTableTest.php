<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SobreTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SobreTable Test Case
 */
class SobreTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SobreTable
     */
    public $Sobre;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sobre'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sobre') ? [] : ['className' => SobreTable::class];
        $this->Sobre = TableRegistry::getTableLocator()->get('Sobre', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sobre);

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
