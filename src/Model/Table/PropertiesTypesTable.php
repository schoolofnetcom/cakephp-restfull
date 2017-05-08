<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PropertiesTypes Model
 *
 * @method \App\Model\Entity\PropertiesType get($primaryKey, $options = [])
 * @method \App\Model\Entity\PropertiesType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PropertiesType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PropertiesType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PropertiesType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PropertiesType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PropertiesType findOrCreate($search, callable $callback = null, $options = [])
 */
class PropertiesTypesTable extends Table
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

        $this->setTable('properties_types');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Search.Search');

        $this->searchManager()
            ->add('q', 'Search.Like', [
                'before'=>true,
                'after'=>true,
                'fieldMode'=>'OR',
                'comparisan'=>'like',
                'wildcardAny'=>'*',
                'wildcardOne'=>'?',
                'field'=>['title'],
            ]);

        $this->hasMany('Properties', [
            'foreignKey' => 'type_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        return $validator;
    }
}
