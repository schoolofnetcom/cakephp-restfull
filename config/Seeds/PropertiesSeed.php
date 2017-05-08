<?php
use Migrations\AbstractSeed;

/**
 * Properties seed.
 */
class PropertiesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Casa 4 quartos - martin de sá',
                'description' => 'Casa 4 quartos (1 suite), wc social, 1 vaga na garagem',
                'value' => '850.50',
                'type_id' => 1,
                'district_id' => 2,
            ],
            [
                'title' => 'Casa 2 quartos - Massaguaçú',
                'description' => 'Casa 2 quartps, 1 wc',
                'value' => '1100.00',
                'type_id' => 1,
                'district_id' => 1,
            ],
            [
                'title' => 'Ap 1 quarto - Massaguaçú',
                'description' => 'Apartamento 1 quarta, 1 vaga na garagem, 100 metros da praia',
                'value' => '180000.00',
                'type_id' => 2,
                'district_id' => 2,
            ],
        ];

        $table = $this->table('properties');
        $table->insert($data)->save();
    }
}
