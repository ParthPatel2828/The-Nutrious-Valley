<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bmi;


class BmiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => ['required', 'digits:10'],
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'bmi' => 'required|numeric', // Add the new field
        ]);

        $data = $request->all();

        // Store data in the 'bmi' table
        Bmi::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'age' => $data['age'],
            'weight' => $data['weight'],
            'height' => $data['height'],
            'bmi_value' => $data['bmi'], 
            'bmi_category' => $this->calculateBmiCategory($data['bmi']), // Assuming you have a separate function for category
        ]);

        return response()->json(['message' => 'BMI Record stored successfully']);
    }

    // Add a function to calculate BMI category based on value
    private function calculateBmiCategory($bmiValue)
    {
        // Determine BMI category based on value
        if ($bmiValue < 18.5) {
            return 'Underweight';
        } elseif ($bmiValue < 24.9) {
            return 'Normal Weight';
        } elseif ($bmiValue < 29.9) {
            return 'Overweight';
        } else {
            return 'Obese';
        }
    }
    
}
