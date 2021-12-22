<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComentarioFixture
 */
class ComentarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'comentario';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idcomentario' => 1,
                'id_usuario' => 1,
                'id_libro' => 1,
                'texto_comentario' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'valoracion' => 1,
            ],
        ];
        parent::init();
    }
}
