<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NlogNskills2Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NlogNskills2Table Test Case
 */
class NlogNskills2TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NlogNskills2Table
     */
    public $NlogNskills2;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nlog_nskills2',
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
        $config = TableRegistry::exists('NlogNskills2') ? [] : ['className' => 'App\Model\Table\NlogNskills2Table'];
        $this->NlogNskills2 = TableRegistry::get('NlogNskills2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NlogNskills2);

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
