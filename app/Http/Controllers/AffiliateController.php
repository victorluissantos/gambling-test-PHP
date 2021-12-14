<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;

class AffiliateController extends Controller
{    
    /**
     * @author Santos L. victor (victorluissantos@live.com)
     * @see responsible for listing the affiliates that meet the predefined rule 
     * @param [Int] $distance, tolerance distance 
     * @param [ENUM] $unit, tolerance measurement unit, possibilities: K,N or M
     */
    public function index ($distance=100, $unit='K') {

        $data['position'] = config('global.located');
        $data['title'] = config('global.compane_name');
        $data['affiliates'] = array();
        
        $affiliates = Affiliate::get();
        foreach ($affiliates as $key => $value) {
            if($this->distance($data['position'], $value->latitude, $value->longitude, $unit) >= $distance) {
                $data['affiliates'][] = $value;
            }
        }

        return view('index', $data);
    }

    /**
     * @author Santos L. Victor (victorluissantos@live.com)
     * @see responsible for calculating the distance between two coordinate coordinates 
     * @param [Array] $from, having two positions: lng = longitude and lat = latitude
     * @return [number]
     */
    private function distance($from, $lat2, $lon2, $unit) {

        $theta = $from['lng'] - $lon2;
        $dist = sin(deg2rad($from['lat'])) * sin(deg2rad($lat2)) +  cos(deg2rad($from['lat'])) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);
      
        if ($unit == "K") {
          return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
}


