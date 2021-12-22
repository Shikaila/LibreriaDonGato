<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EditorialTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EditorialTable Test Case
 */
class EditorialTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EditorialTable
     */
    protected $Editorial;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Editorial',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Editorial') ? [] : ['className' => EditorialTable::class];
        $this->Editorial = $this->getTableLocator()->get('Editorial', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Editorial);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EditorialTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
