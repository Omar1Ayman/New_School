<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>json_encode([
                'en'=>$this->faker->word(),
                'ar'=>$this->faker->word()
            ]),
            'desc'=>json_encode([
                'en'=>"Beginner to Pro in Excel: Financial Modeling and Valuation",
                'ar'=>$this->faker->text()
            ]),

            'image'=>rand(1,8).'.jpg',
             'questions_num'=>4,
             'difficult'=>3,
             'duration_min'=>30
        ];
    }
}
