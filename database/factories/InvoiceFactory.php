<?php

namespace Database\Factories;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Invoice::class;
    
    public function definition()
    {
        $status=$this->faker->randomElement(['B','V','P']);
        return [
            'customer_id'=>Customer::factory(),
            'amount'=>$this->faker->numberBetween(100,20000),
            'status'=>$status,
            'bill_date'=>$this->faker->dateTimeThisdecade(),
            'paid_date'=>$status=='P'?$this->faker->dateTimeThisDecade():NULL,
        ];
    }
}
