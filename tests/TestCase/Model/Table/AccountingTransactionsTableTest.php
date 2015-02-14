<?php
namespace Rita\Accounting\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rita\Accounting\Model\Table\AccountingTransactionsTable;

/**
 * Rita\Accounting\Model\Table\AccountingTransactionsTable Test Case
 */
class AccountingTransactionsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'AccountingTransactions' => 'plugin.rita/accounting.accounting_transactions',
        'Ofs' => 'plugin.rita/accounting.ofs',
        'Tos' => 'plugin.rita/accounting.tos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AccountingTransactions') ? [] : ['className' => 'Rita\Accounting\Model\Table\AccountingTransactionsTable'];        $this->AccountingTransactions = TableRegistry::get('AccountingTransactions', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountingTransactions);

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
