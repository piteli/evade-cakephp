<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NlogNskills3Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NlogNskills3Table Test Case
 */
class NlogNskills3TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NlogNskills3Table
     */
    public $NlogNskills3;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nlog_nskills3',
        'app.nursings',
        'app.osce_skills',
        'app.areaskill_attributes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NlogNskills3') ? [] : ['className' => 'App\Model\Table\NlogNskills3Table'];
        $this->NlogNskills3 = TableRegistry::get('NlogNskills3', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NlogNskills3);

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
