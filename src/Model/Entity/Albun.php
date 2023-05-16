<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Albun Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $imagem
 * @property string|null $imagem_dir
 *
 * @property \App\Model\Entity\Foto[] $fotos
 */
class Albun extends Entity
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
        'resumo' => true,
        'data' => true,
        'imagem' => true,
        'imagem_dir' => true,
        'fotos' => true
    ];
}
