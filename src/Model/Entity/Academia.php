<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Academia Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $video
 * @property string|null $imagem
 * @property string|null $imagem_dir
 * @property string|null $logo
 * @property string|null $logo_dir
 * @property string $descricao_logo
 * @property string|null $pdf
 * @property string|null $pdf_dir
 */
class Academia extends Entity
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
        'video' => true,
        'imagem' => true,
        'imagem_dir' => true,
        'logo' => true,
        'logo_dir' => true,
        'descricao_logo' => true,
        'pdf' => true,
        'pdf_dir' => true,
        'tipo' => true,
        'cor_tarja_tipo' => true
    ];
}
