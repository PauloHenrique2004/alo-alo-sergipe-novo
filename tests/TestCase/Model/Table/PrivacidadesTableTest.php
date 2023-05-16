<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrivacidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrivacidadesTable Test Case
 */
class PrivacidadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrivacidadesTable
     */
    public $Privacidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Privacidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Privacidades') ? [] : ['className' => PrivacidadesTable::class];
        $this->Privacidades = TableRegistry::getTableLocator()->get('Privacidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Privacidades);

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
