<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProdutoTopo Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string|null $icone
 * @property string|null $icone_dir
 * @property string|null $imagem
 * @property string|null $imagem_dir
 */
class ProdutoTopo extends Entity
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
        'descricao' => true,
        'icone' => true,
        'icone_dir' => true,
        'imagem' => true,
        'imagem_dir' => true
    ];
}
