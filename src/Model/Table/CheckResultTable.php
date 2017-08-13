<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CheckResult Model
 *
 * @property \App\Model\Table\ChecksTable|\Cake\ORM\Association\BelongsTo $Checks
 *
 * @method \App\Model\Entity\CheckResult get($primaryKey, $options = [])
 * @method \App\Model\Entity\CheckResult newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CheckResult[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CheckResult|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CheckResult patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CheckResult[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CheckResult findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CheckResultTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('check_result');
        $this->setDisplayField('check_id');
        $this->setPrimaryKey('check_id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Checks', [
            'foreignKey' => 'check_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('check_count')
            ->allowEmpty('check_count');

        $validator
            ->integer('check_user')
            ->requirePresence('check_user', 'create')
            ->notEmpty('check_user');

        $validator
            ->date('check_date')
            ->requirePresence('check_date', 'create')
            ->notEmpty('check_date');

        $validator
            ->requirePresence('check_item', 'create')
            ->notEmpty('check_item');

        $validator
            ->requirePresence('check_result', 'create')
            ->notEmpty('check_result');

        $validator
            ->allowEmpty('created_user');

        $validator
            ->allowEmpty('modified_user');

        $validator
            ->integer('delete_flag')
            ->requirePresence('delete_flag', 'create')
            ->notEmpty('delete_flag');

        $validator
            ->dateTime('delete_date')
            ->allowEmpty('delete_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['check_id'], 'Checks'));

        return $rules;
    }
}
