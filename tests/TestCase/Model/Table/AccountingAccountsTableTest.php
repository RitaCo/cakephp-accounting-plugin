<?php
namespace Rita\Accounting\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rita\Accounting\Model\Table\AccountingAccountsTable;

/**
 * Rita\Accounting\Model\Table\AccountingAccountsTable Test Case
 */
class AccountingAccountsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'AccountingAccounts' => 'plugin.rita/accounting.accounting_accounts',
        'Users' => 'plugin.rita/accounting.users',
        'Types' => 'plugin.rita/accounting.types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AccountingAccounts') ? [] : ['className' => 'Rita\Accounting\Model\Table\AccountingAccountsTable'];        $this->AccountingAccounts = TableRegistry::get('AccountingAccounts', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountingAccounts);

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
