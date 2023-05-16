<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProdutoTopos Model
 *
 * @method \App\Model\Entity\ProdutoTopo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProdutoTopo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProdutoTopo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProdutoTopo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProdutoTopo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProdutoTopo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProdutoTopo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProdutoTopo findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdutoToposTable extends Table
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

        $this->setTable('produto_topos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'icone' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'icone_dir', // defaults to `dir`
                    'size' => 'icone_size', // defaults to `size`
                    'type' => 'icone_type', // defaults to `type`
                ],
            ],

//            'imagem' => [
//                'fields' => [
//                    // if these fields or their defaults exist
//                    // the values will be set.
//                    'dir' => 'imagem_dir', // defaults to `dir`
//                    'size' => 'imagem_size', // defaults to `size`
//                    'type' => 'imagem_type', // defaults to `type`
//                ],
//            ],
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->allowEmptyString('nome', false);

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        $validator
            ->allowEmptyString('icone');


        $validator
            ->allowEmptyFile('imagem');

        return $validator;
    }
}
