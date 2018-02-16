<?php


use Phinx\Seed\AbstractSeed;

class ItemsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'category_id'   => rand(1, 5),
                'name'          => $faker->realText($faker->numberBetween(20, 50)),
                'price'         => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
                'created'       => date('Y-m-d H:i:s'),
            ];
        }
        $this->insert('items', $data);
    }
}
