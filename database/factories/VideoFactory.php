<?php

// database/factories/VideoFactory.php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    protected $model = Video::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'video_url' => $this->faker->url,
            'count_rep' => $this->faker->numberBetween(1, 100),
            'count_search' => $this->faker->numberBetween(1, 100),
        ];
    }
}
