<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Editorial Model
 *
 * @method \App\Model\Entity\Editorial newEmptyEntity()
 * @method \App\Model\Entity\Editorial newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Editorial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Editorial get($primaryKey, $options = [])
 * @method \App\Model\Entity\Editorial findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Editorial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Editorial[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Editorial|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Editorial saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Editorial[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Editorial[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Editorial[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Editorial[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EditorialTable extends Table
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

        $this->setTable('editorial');
        $this->setDisplayField('ideditorial');
        $this->setPrimaryKey('ideditorial');
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
            ->integer('ideditorial')
            ->allowEmptyString('ideditorial', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        return $validator;
    }
}
