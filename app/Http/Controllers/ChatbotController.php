<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function respond(Request $request)
    {
        $msg = strtolower($request->message);
        $isEmergency = str_contains($msg, 'urgent')
            || str_contains($msg, 'help')
            || str_contains($msg, 'immediately')
            || str_contains($msg, 'emergency')
            || str_contains($msg, 'ambulance');


        $response = [
            'text' => "🤖 I can help with Hospitals, Doctors, Blood Donation, Labs, Pharmacy, First Aid and Emergency Numbers."
        ];

        if (str_contains($msg, 'hospital')) {
            $response = [
                'text' => "🏥 View nearby hospitals and book consultations.",
                'link' => url('/hospitals')
            ];
        }
        elseif (str_contains($msg, 'doctor')) {
            $response = [
                'text' => "👨‍⚕️ Browse doctors and book appointments.",
                'link' => url('/doctors')
            ];
        }
        elseif (str_contains($msg, 'blood')) {

            if ($isEmergency) {
                $response = [
                    'text' => "🚨 URGENT BLOOD REQUEST DETECTED! Redirecting you immediately.",
                    'link' => url('/blood')
                ];
            } else {
                $response = [
                    'text' => "🩸 You can find blood donors or request blood here.",
                    'link' => url('/blood')
                ];
            }
        }

        elseif (str_contains($msg, 'lab')) {
            $response = [
                'text' => "🧪 Search labs and clinics.",
                'link' => url('/labs')
            ];
        }
        elseif (str_contains($msg, 'pharmacy') || str_contains($msg, 'medicine')) {
            $response = [
                'text' => "💊 Find pharmacies and check medicine availability.",
                'link' => url('/pharmacy')
            ];
        }
        elseif (str_contains($msg, 'first aid') || str_contains($msg, 'cpr')) {
            $response = [
                'text' => "🚑 Learn first aid steps.",
                'link' => url('/firstaid')
            ];
        }
        elseif (str_contains($msg, 'emergency') || str_contains($msg, 'ambulance')) {
            $response = [
                'text' => "🚨 Emergency numbers are available here.",
                'link' => url('/emergency')
            ];
        }

        return response()->json($response);
    }
}
