<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AutorFixture
 */
class AutorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'autor';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idautor' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidos' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
