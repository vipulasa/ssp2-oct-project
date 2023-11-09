<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // create 10 hospitals
//        \App\Models\Hospital::factory(10)->create();

        $data = array(
            "Anesthesiology",
            "Cardiology",
            "Dermatology",
            "Emergency Medicine",
            "Endocrinology",
            "Family Medicine",
            "Gastroenterology",
            "Geriatrics",
            "Hematology",
            "Infectious Disease",
            "Internal Medicine",
            "Nephrology",
            "Neurology",
            "Obstetrics and Gynecology",
            "Ophthalmology",
            "Orthopedic Surgery",
            "Otolaryngology (ENT)",
            "Pathology",
            "Pediatrics",
            "Physical Medicine and Rehabilitation",
            "Plastic Surgery",
            "Psychiatry",
            "Pulmonology",
            "Radiology",
            "Rheumatology",
            "Surgery",
            "Urology",
            "Pain Medicine",
            "Pediatric Anesthesiology",
            "Critical Care Medicine",
            "Interventional Cardiology",
            "Electrophysiology",
            "Heart Failure and Transplant Cardiology",
            "Dermatopathology",
            "Pediatric Dermatology",
            "Mohs Surgery",
            "Pediatric Emergency Medicine",
            "Sports Medicine",
            "Hepatology",
            "Transplant Hepatology",
            "Cardiology",
            "Gastroenterology",
            "Infectious Disease",
            "Maternal-Fetal Medicine",
            "Gynecologic Oncology",
            "Reproductive Endocrinology and Infertility",
            "Sports Medicine",
            "Hand Surgery",
            "Spine Surgery",
            "Pediatric Cardiology",
            "Pediatric Hematology/Oncology",
            "Neonatal-Perinatal Medicine",
            "Child and Adolescent Psychiatry",
            "Forensic Psychiatry",
            "Geriatric Psychiatry",
            "Vascular Surgery",
            "Pediatric Surgery",
            "Cardiothoracic Surgery"
        );

        foreach ($data as $key => $value) {
            \App\Models\Specialisation::create([
                'title' => $value,
            ]);
        }
    }
}
