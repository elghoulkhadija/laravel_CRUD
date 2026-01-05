<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
           "nom_p"=> $this->faker->word(),
           "description_p"=>$this->faker->sentence,
           "prix_p"=>$this->faker->randomFloat(2, 10, 100),
           "quantite"=>$this->faker->numberBetween(1, 100)
        ];
    }
}
