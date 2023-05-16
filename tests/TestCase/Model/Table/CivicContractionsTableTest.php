<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CivicContractionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CivicContractionsTable Test Case
 */
class CivicContractionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CivicContractionsTable
     */
    public $CivicContractions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CivicContractions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CivicContractions') ? [] : ['className' => CivicContractionsTable::class];
        $this->CivicContractions = TableRegistry::getTableLocator()->get('CivicContractions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CivicContractions);

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
