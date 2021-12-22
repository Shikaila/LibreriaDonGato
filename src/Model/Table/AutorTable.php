<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Autor Model
 *
 * @method \App\Model\Entity\Autor newEmptyEntity()
 * @method \App\Model\Entity\Autor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Autor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Autor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Autor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Autor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Autor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Autor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Autor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Autor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Autor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Autor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Autor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AutorTable extends Table
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

        $this->setTable('autor');
        $this->setDisplayField('idautor');
        $this->setPrimaryKey('idautor');
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
            ->integer('idautor')
            ->allowEmptyString('idautor', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 200)
            ->allowEmptyString('apellidos');

        return $validator;
    }
}
