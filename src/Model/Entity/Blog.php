<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Blog Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string|null $imagem
 * @property string|null $imagem_dir
 * @property \Cake\I18n\FrozenDate|null $data
 */
class Blog extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'descricao' => true,
        'imagem' => true,
        'imagem_dir' => true,
        'data' => true,
        'resumo' => true
    ];
}
