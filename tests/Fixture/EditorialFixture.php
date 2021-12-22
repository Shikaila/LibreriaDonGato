<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EditorialFixture
 */
class EditorialFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'editorial';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ideditorial' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
