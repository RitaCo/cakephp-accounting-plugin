<?php
namespace Rita\Accounting\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rita\Accounting\Model\Table\AccountingPaymentsTable;

/**
 * Rita\Accounting\Model\Table\AccountingPaymentsTable Test Case
 */
class AccountingPaymentsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'AccountingPayments' => 'plugin.rita/accounting.accounting_payments',
        'Accunts' => 'plugin.rita/accounting.accunts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AccountingPayments') ? [] : ['className' => 'Rita\Accounting\Model\Table\AccountingPaymentsTable'];        $this->AccountingPayments = TableRegistry::get('AccountingPayments', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountingPayments);

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
