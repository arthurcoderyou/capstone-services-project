<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{

    protected $model = Service::class;
    protected $imageNames = [
        'f_battery_recharging.jpg',
        'f_cables.jpg',
        'f_change_oil.jpg',
        'f_clean_carboretor.jpg',
        'f_clean_fuel_filter.jpg',
        'f_clean_oil_filter_screen.jpg',
        'f_clean_spark_plug.jpeg',
        'f_fuel_pressure_test.jpg',
        'f_inspect_or_clean_air_filter.jpg',
        'f_tdp_and_major_overhaul.jpg',
        'f_tp_reset.jpg',
        'f_tune_up.jpg'

    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $service_name = $this->faker->unique()->words($nb = 4,  $asText = true);
        $slug = Str::slug($service_name, "-");
        // $imageName = $this->faker->randomElement($this->imageNames);
        $imageName = "service_".$this->faker->numberBetween(1,20).".jpg";


        return [
            'name' => $service_name,
            'slug' => $slug,
            'tagline' => $this->faker->text(20),
            'service_category_id' => $this->faker->numberBetween(1,11),
            'price' => $this->faker->numberBetween( 100,500),
            'image' => $imageName,
            'thumbnail' => $imageName,
            'description' => $this->faker->text(500),
            'inclusion' => $this->faker->text(20).'|'.$this->faker->text(20).'|'.$this->faker->text(20).'|'.$this->faker->text(20),
            'exclusion' => $this->faker->text(20).'|'.$this->faker->text(20).'|'.$this->faker->text(20).'|'.$this->faker->text(20),

        ];
    }
}
