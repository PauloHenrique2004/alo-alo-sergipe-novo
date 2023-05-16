<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Campanha Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao_1
 * @property string $descricao_2
 * @property string|null $logo
 * @property string|null $logo_dir
 * @property string|null $imagem
 * @property string|null $imagem_dir
 */
class Campanha extends Entity
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
        'nome_empresa' => true,
        'titulo_descricao_2' => true,
        'descricao_1' => true,
        'descricao_2' => true,
        'logo' => true,
        'logo_dir' => true,
        'imagem' => true,
        'imagem_dir' => true
    ];
}
