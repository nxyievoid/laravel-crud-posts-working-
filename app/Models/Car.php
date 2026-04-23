<?php

namespace App\Models;

class Car
{
    public $make;
    public $model;
    public $year;

    // Konstruktors datu piešķiršanai
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Statiskā metode jaunas instances izveidei
    public static function create($make, $model, $year)
    {
        return new self($make, $model, $year);
    }

    // Metode datu attēlošanai HTML formātā
    public function display()
    {
        return "
            <div style='border: 2px solid #555; padding: 20px; border-radius: 10px; width: 300px; font-family: sans-serif;'>
                <h2 style='color: #ff69b4;'>🚗 Car Details</h2>
                <p><strong>Make:</strong> {$this->make}</p>
                <p><strong>Model:</strong> {$this->model}</p>
                <p><strong>Year:</strong> {$this->year}</p>
            </div>
        ";
    }
}