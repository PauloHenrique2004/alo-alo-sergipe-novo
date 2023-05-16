<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campanhas Model
 *
 * @method \App\Model\Entity\Campanha get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campanha newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Campanha[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campanha|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campanha saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campanha patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campanha[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campanha findOrCreate($search, callable $callback = null, $options = [])
 */
class CampanhasTable extends Table
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

        $this->setTable('campanhas');
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

            'imagem' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'imagem_dir', // defaults to `dir`
                    'size' => 'imagem_size', // defaults to `size`
                    'type' => 'imagem_type', // defaults to `type`
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
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->allowEmptyString('titulo', false);

        $validator
            ->scalar('descricao_1')
            ->requirePresence('descricao_1', 'create')
            ->allowEmptyString('descricao_1', false);

        $validator
            ->scalar('descricao_2')
            ->requirePresence('descricao_2', 'create')
            ->allowEmptyString('descricao_2', false);

        $validator
            ->allowEmptyString('logo', true);

        $validator
            ->allowEmptyString('imagem', true);


        return $validator;
    }
}
