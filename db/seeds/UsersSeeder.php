<?php


use Phinx\Seed\AbstractSeed;

class UsersSeeder extends AbstractSeed
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
        $faker = Faker\Factory::create('ru_RU');
        $genders = ['male' => 'M', 'female' => 'F'];
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $gender = array_keys($genders)[random_int(0, 1)];
            $data[] = [
                'name'      => $name = $faker->name($gender),
                'gender'    => $genders[$gender],
                'birthdate' => $faker->date($format = 'Y-m-d', $max = '-5 years')
            ];
        }
        $this->insert('users', $data);

    }
}
