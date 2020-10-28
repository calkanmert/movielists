<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function getSettings() {
        echo json_encode(Settings::all());
    }

    public function addSetting(Request $request) {
        $insertedData = Settings::create($request->input());
        echo json_encode(
            [
                'status_code' => 200,
                'inserted_data' => $insertedData
            ]
        );
    }

    public function deleteSetting(Request $request) {
        $status = Settings::find($request->input('setting_id'))->delete();
        if($status) {
            echo json_encode([
                'status_code' => 200
            ]);
        }
    }

    public function updateSetting(Request $request) {
        $status = Settings::where('key', '=', $request->input('key'))->update(
            [
                'value' => $request->input('value')
            ]
        );
        if($status) {
            echo json_encode([
                'status_code' => 200
            ]);
        }
    }
}
