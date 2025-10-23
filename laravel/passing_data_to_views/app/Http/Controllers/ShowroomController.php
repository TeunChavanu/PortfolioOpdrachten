<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function index()
    {
        $data = (object) [
            "showroom" => [
                [
                    "id" => 1,
                    "brand" => "Tesla",
                    "model" => "Model S",
                    "price" => 89999,
                    "image" => "https://example.com/images/tesla_model_s.jpg"
                ],
                [
                    "id" => 2,
                    "brand" => "BMW",
                    "model" => "i4",
                    "price" => 69999,
                    "image" => "https://example.com/images/bmw_i4.jpg"
                ],
                [
                    "id" => 3,
                    "brand" => "Mercedes",
                    "model" => "EQE",
                    "price" => 75999,
                    "image" => "https://example.com/images/mercedes_eqe.jpg"
                ],
                [
                    "id" => 4,
                    "brand" => "Audi",
                    "model" => "e-tron",
                    "price" => 82999,
                    "image" => "https://example.com/images/audi_e_tron.jpg"
                ],
                [
                    "id" => 5,
                    "brand" => "Volkswagen",
                    "model" => "ID.4",
                    "price" => 45999,
                    "image" => "https://example.com/images/volkswagen_id4.jpg"
                ],
                [
                    "id" => 6,
                    "brand" => "Volvo",
                    "model" => "XC40 Recharge",
                    "price" => 51999,
                    "image" => "https://example.com/images/volvo_xc40_recharge.jpg"
                ],
                [
                    "id" => 7,
                    "brand" => "Hyundai",
                    "model" => "Ioniq 5",
                    "price" => 42999,
                    "image" => "https://example.com/images/hyundai_ioniq_5.jpg"
                ],
                [
                    "id" => 8,
                    "brand" => "Kia",
                    "model" => "Niro",
                    "price" => 44999,
                    "image" => "https://example.com/images/kia_niro.jpg"
                ],
                [
                    "id" => 9,
                    "brand" => "Ford",
                    "model" => "Mustang Mach-E",
                    "price" => 55999,
                    "image" => "https://example.com/images/ford_mustang_mach_e.jpg"
                ],
                [
                    "id" => 10,
                    "brand" => "Nissan",
                    "model" => "Ariya",
                    "price" => 39999,
                    "image" => "https://example.com/images/nissan_ariya.jpg"
                ],
                [
                    "id" => 11,
                    "brand" => "Porsche",
                    "model" => "Taycan",
                    "price" => 99999,
                    "image" => "https://example.com/images/porsche_taycan.jpg"
                ],
                [
                    "id" => 12,
                    "brand" => "Peugeot",
                    "model" => "e-208",
                    "price" => 25999,
                    "image" => "https://example.com/images/peugeot_e208.jpg"
                ],
                [
                    "id" => 13,
                    "brand" => "Renault",
                    "model" => "Megane E-Tech",
                    "price" => 31999,
                    "image" => "https://example.com/images/renault_megane_etech.jpg"
                ],
                [
                    "id" => 14,
                    "brand" => "Opel",
                    "model" => "Corsa-e",
                    "price" => 24999,
                    "image" => "https://example.com/images/opel_corsa_e.jpg"
                ],
                [
                    "id" => 15,
                    "brand" => "Fiat",
                    "model" => "500e",
                    "price" => 21999,
                    "image" => "https://example.com/images/fiat_500e.jpg"
                ],
                [
                    "id" => 16,
                    "brand" => "Mazda",
                    "model" => "MX-30",
                    "price" => 28999,
                    "image" => "https://example.com/images/mazda_mx30.jpg"
                ],
                [
                    "id" => 17,
                    "brand" => "Honda",
                    "model" => "e",
                    "price" => 26999,
                    "image" => "https://example.com/images/honda_e.jpg"
                ],
                [
                    "id" => 18,
                    "brand" => "Jaguar",
                    "model" => "I-Pace",
                    "price" => 79999,
                    "image" => "https://example.com/images/jaguar_i_pace.jpg"
                ],
                [
                    "id" => 19,
                    "brand" => "Skoda",
                    "model" => "Enyaq iV",
                    "price" => 37999,
                    "image" => "https://example.com/images/skoda_enyaq_iv.jpg"
                ],
                [
                    "id" => 20,
                    "brand" => "Citroën",
                    "model" => "ë-C4",
                    "price" => 30999,
                    "image" => "https://example.com/images/citroen_e_c4.jpg"
                ],
            ],
        ];

        return view('showroom', compact('data'));
    }
    public function contact()
    {
        $data = (object) [
            "company" => (object) [
                "name" => "FutureDrive B.V.",
                "address" => "Elektronstraat 42, 1234 AB Amsterdam",
                "phone" => "+31 20 123 4567",
                "email" => "info@futuredrive.nl",
            ]
        ];

        return view('contact', compact('data'));
    }
}
