<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Noticia Entity
 *
 * @property int $id
 * @property int $categoria_id
 * @property string $titulo
 * @property string|null $banner_imagem
 * @property string|null $banner_imagem_dir
 * @property string|null $sub_banner
 * @property string|null $sub_banner_dir
 *
 * @property \App\Model\Entity\Categoria $categoria
 */
class Noticia extends Entity
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
        'categoria_id' => true,
        'titulo' => true,
        'titulo_resumo' => true,
        'descricao' => true,
        'fonte' => true,
        'data' => true,
        'imagem' => true,
        'imagem_dir' => true,
        'banner_imagem' => true,
        'banner_imagem_dir' => true,
        'sub_banner' => true,
        'categoria' => true,
        'imagem_visualizacao' => true,
        'imagem_visualizacao_dir' => true,
        'relacionada' => true
    ];
}
