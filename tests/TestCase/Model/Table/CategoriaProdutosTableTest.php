<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriaProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriaProdutosTable Test Case
 */
class CategoriaProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriaProdutosTable
     */
    public $CategoriaProdutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CategoriaProdutos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategoriaProdutos') ? [] : ['className' => CategoriaProdutosTable::class];
        $this->CategoriaProdutos = TableRegistry::getTableLocator()->get('CategoriaProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriaProdutos);

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
