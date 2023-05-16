<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcademiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcademiasTable Test Case
 */
class AcademiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AcademiasTable
     */
    public $Academias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Academias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Academias') ? [] : ['className' => AcademiasTable::class];
        $this->Academias = TableRegistry::getTableLocator()->get('Academias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Academias);

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
