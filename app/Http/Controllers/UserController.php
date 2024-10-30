<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberType;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('phones.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phones.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $phone =$this->getCountryFromPhoneNumber($request->phone);

        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('phones.edit');
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getCountryFromPhoneNumber($phoneNumber)
    {
        // Create instance of the PhoneNumberUtil
        $phoneUtil = PhoneNumberUtil::getInstance();

        try {
            // Parse the phone number (assuming it's in international format)
            $number = $phoneUtil->parse($phoneNumber, 'TZ');

            // Get the country code from the parsed number
            $countryCode = $number->getCountryCode();

            // Get the region (country) for that country code
            $regionCode = $phoneUtil->getRegionCodeForNumber($number);
            $isValid = $phoneUtil->isValidNumber($number);
            $nationalNumber = $number->getNationalNumber();

            // Get the type of the phone number (e.g., MOBILE, FIXED_LINE, etc.)
            $numberType = $phoneUtil->getNumberType($number);

            // Output validation results
            if ($isValid && $numberType == PhoneNumberType::MOBILE) {
                dd($numberType,'success',$nationalNumber);
            } else {
                dd($numberType,'BUg');
                echo "Invalid mobile number or not a mobile phone.";
            }

            // Return the country code and region code
            dd([
                'country_code' => $countryCode,
                'region_code'  => $regionCode,
            ]);
        } catch (NumberParseException $e) {
           dd($e);
        }
    }
}
