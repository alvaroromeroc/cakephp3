<?php

use Migrations\AbstractSeed;

/**
 * Bookmarks seed.
 */
class BookmarksSeed extends AbstractSeed {

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
    public function run() {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 400; $i++) {
            $data[] = [
                'title' => $faker->sentence($nb = 4, $asText = true),
                'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'url' => $faker->url,
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s"),
                'user_id' => $faker->numberBetween($min = 1, $max = 201)
//                'user_id' => $faker->rand(1, 51)
            ];
        }

        $table = $this->table('bookmarks');
        $table->insert($data)->save();
    }

}
