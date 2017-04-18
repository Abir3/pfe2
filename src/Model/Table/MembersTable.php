<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Members Model
 *
 * @method \App\Model\Entity\Member get($primaryKey, $options = [])
 * @method \App\Model\Entity\Member newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Member[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Member|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Member patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Member[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Member findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MembersTable extends Table
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

        $this->setTable('members');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');

        $this->addBehavior('Timestamp');
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
            ->integer('Id')
            ->allowEmpty('Id', 'create');

        $validator
            ->integer('Id_user')
            ->requirePresence('Id_user', 'create')
            ->notEmpty('Id_user');

        $validator
            ->requirePresence('FirstName', 'create')
            ->notEmpty('FirstName');

        $validator
            ->requirePresence('LastName', 'create')
            ->notEmpty('LastName');

        $validator
            ->requirePresence('Adress', 'create')
            ->notEmpty('Adress');

        $validator
            ->requirePresence('E-mail', 'create')
            ->notEmpty('E-mail');

        $validator
            ->requirePresence('Password', 'create')
            ->notEmpty('Password');

        $validator
            ->requirePresence('Image', 'create')
            ->notEmpty('Image');

        $validator
            ->integer('Telephone')
            ->requirePresence('Telephone', 'create')
            ->notEmpty('Telephone');

        $validator
            ->date('Created')
            ->requirePresence('Created', 'create')
            ->notEmpty('Created');

        return $validator;
    }
}
