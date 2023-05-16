<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $nome
 * @property string|null $imagem
 * @property string|null $imagem_dir
 */
class Produto extends Entity
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
        'nome' => true,
        'imagem' => true,
        'descricao' => true,
        'photo' => true,
        'photo_dir' => true,
        'imagem_dir' => true,
        'categoria_produto_id' => true
    ];
}
