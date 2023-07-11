<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Noticias Model
 *
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 *
 * @method \App\Model\Entity\Noticia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Noticia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Noticia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Noticia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Noticia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Noticia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Noticia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Noticia findOrCreate($search, callable $callback = null, $options = [])
 */
class NoticiasTable extends Table
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

        $this->setTable('noticias');
        $this->setDisplayField('titulo');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'banner_imagem' => [
                'fields' => [
                    'dir' => 'banner_imagem_dir', // defaults to `dir`
                    'size' => 'banner_imagem_size', // defaults to `size`
                    'type' => 'banner_imagem_type', // defaults to `type`
                ],
            ],

            'imagem' => [
                'fields' => [
                    'dir' => 'imagem_dir', // defaults to `dir`
                    'size' => 'imagem_size', // defaults to `size`
                    'type' => 'imagem_type', // defaults to `type`
                ],
            ],

            'imagem_visualizacao' => [
                'fields' => [
                    'dir' => 'imagem_visualizacao_dir', // defaults to `dir`
                    'size' => 'imagem_visualizacao_size', // defaults to `size`
                    'type' => 'imagem_visualizacao_type', // defaults to `type`
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
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->allowEmptyString('descricao', false);

        $validator
            ->allowEmptyFile('imagem');

        $validator
            ->allowEmptyFile('banner_imagem');

        $validator
            ->allowEmptyFile('imagem_visualizacao');


        return $validator;
    }


    public function beforeSave(Event $event, $entity, $options)
    {
        if ($entity->imagem) {
            $path = WWW_ROOT . 'files/Noticias/imagem/' . $entity->imagem;
         //   dd($path);
            if (file_exists($path)) {
                $image = Image::make($path);

                // Defina a largura e a altura desejadas para a imagem redimensionada
                $novaLargura = 1400;
                $novaAltura = 880;

                $image->resize($novaLargura, $novaAltura, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                $image->save($path);
            }
        }

        return true;
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
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));
        return $rules;
    }
}
