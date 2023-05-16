<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImagensExamesFixture
 */
class ImagensExamesFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'imagensexames';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'created' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        'photo' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        'photo_dir' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_bin'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'created' => '2019-06-11',
                'modified' => '2019-06-11',
                'nome' => 'Lorem ipsum dolor sit amet',
                'photo' => 'Lorem ipsum dolor sit amet',
                'photo_dir' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
