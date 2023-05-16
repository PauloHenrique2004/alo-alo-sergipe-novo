<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdutoToposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdutoToposTable Test Case
 */
class ProdutoToposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdutoToposTable
     */
    public $ProdutoTopos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ProdutoTopos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProdutoTopos') ? [] : ['className' => ProdutoToposTable::class];
        $this->ProdutoTopos = TableRegistry::getTableLocator()->get('ProdutoTopos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProdutoTopos);

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
