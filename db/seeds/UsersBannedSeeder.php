<?php


use Phinx\Seed\AbstractSeed;

class UsersBannedSeeder extends AbstractSeed
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
        $users = [];
        for ($i = 0; $i < 20; $i++) {
            do {
                $user_id = rand(1, 100);
            } while (in_array($user_id, $users));
            $users[] = $user_id;
            $data[] = [
                'user_id'   => $user_id
            ];
        }
        $this->insert('users_banned', $data);

    }
}
