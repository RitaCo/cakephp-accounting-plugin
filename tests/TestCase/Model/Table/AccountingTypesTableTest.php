<?php
namespace Rita\Accounting\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rita\Accounting\Model\Table\AccountingTypesTable;

/**
 * Rita\Accounting\Model\Table\AccountingTypesTable Test Case
 */
class AccountingTypesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'AccountingTypes' => 'plugin.rita/accounting.accounting_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AccountingTypes') ? [] : ['className' => 'Rita\Accounting\Model\Table\AccountingTypesTable'];        $this->AccountingTypes = TableRegistry::get('AccountingTypes', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountingTypes);

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
