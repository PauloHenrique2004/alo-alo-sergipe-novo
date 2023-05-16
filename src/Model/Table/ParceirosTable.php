<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parceiros Model
 *
 * @method \App\Model\Entity\Parceiro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parceiro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parceiro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parceiro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parceiro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parceiro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parceiro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parceiro findOrCreate($search, callable $callback = null, $options = [])
 */
class ParceirosTable extends Table
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

        $this->setTable('parceiros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'logo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'logo_dir', // defaults to `dir`
                    'size' => 'logo_size', // defaults to `size`
                    'type' => 'logo_type', // defaults to `type`
                ],
            ],
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
            ->allowEmptyString('id', 'create');

        $validator
            ->allowEmptyString('logo', false);

        return $validator;
    }
}
