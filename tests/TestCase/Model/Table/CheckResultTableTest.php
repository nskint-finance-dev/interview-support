<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CheckResultTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CheckResultTable Test Case
 */
class CheckResultTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CheckResultTable
     */
    public $CheckResult;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.check_result',
        'app.checks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CheckResult') ? [] : ['className' => CheckResultTable::class];
        $this->CheckResult = TableRegistry::get('CheckResult', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CheckResult);

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
