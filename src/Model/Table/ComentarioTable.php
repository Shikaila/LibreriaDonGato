<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comentario Model
 *
 * @method \App\Model\Entity\Comentario newEmptyEntity()
 * @method \App\Model\Entity\Comentario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Comentario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comentario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comentario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Comentario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comentario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comentario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comentario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comentario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comentario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comentario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comentario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ComentarioTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('comentario');
        $this->setDisplayField('idcomentario');
        $this->setPrimaryKey('idcomentario');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('idcomentario')
            ->allowEmptyString('idcomentario', null, 'create');

        $validator
            ->integer('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->notEmptyString('id_usuario');

        $validator
            ->integer('id_libro')
            ->requirePresence('id_libro', 'create')
            ->notEmptyString('id_libro');

        $validator
            ->scalar('texto_comentario')
            ->maxLength('texto_comentario', 16777215)
            ->allowEmptyString('texto_comentario');

        $validator
            ->integer('valoracion')
            ->requirePresence('valoracion', 'create')
            ->notEmptyString('valoracion');

        return $validator;
    }
}
