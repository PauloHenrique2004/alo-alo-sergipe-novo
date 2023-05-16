<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Configuracoes Model
 *
 * @method \App\Model\Entity\Configuraco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Configuraco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Configuraco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Configuraco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Configuraco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Configuraco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Configuraco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Configuraco findOrCreate($search, callable $callback = null, $options = [])
 */
class ConfiguracoesTable extends Table
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

        $this->setTable('configuracoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('google_ads')
            ->maxLength('google_ads', 4294967295)
            ->allowEmptyString('google_ads');

        $validator
            ->scalar('google_analytics')
            ->maxLength('google_analytics', 4294967295)
            ->allowEmptyString('google_analytics');

        $validator
            ->scalar('whatsApp')
            ->maxLength('whatsApp', 255)
            ->allowEmptyString('whatsApp');

        $validator
            ->scalar('maps')
            ->maxLength('maps', 4294967295)
            ->allowEmptyString('maps');

        $validator
            ->scalar('twitter')
            ->maxLength('twitter', 255)
            ->allowEmptyString('twitter');

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 255)
            ->allowEmptyString('instagram');

        $validator
            ->scalar('youtube')
            ->maxLength('youtube', 255)
            ->allowEmptyString('youtube');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 255)
            ->allowEmptyString('facebook');

        return $validator;
    }
}
