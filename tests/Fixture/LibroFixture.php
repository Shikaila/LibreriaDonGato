<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LibroFixture
 */
class LibroFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'libro';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idlibro' => 1,
                'titulo_libro' => 'Lorem ipsum dolor sit amet',
                'isbn' => 'Lorem ipsum dolor ',
                'id_autor' => 1,
                'id_editorial' => 1,
                'fecha_publicacion' => '2021-12-22',
                'precio' => 1,
                'numero_paginas' => 1,
                'portada' => 'Lorem ipsum dolor sit amet',
                'resumen' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            ],
        ];
        parent::init();
    }
}
