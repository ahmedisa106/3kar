<?php

use Illuminate\Http\Request;

function getSetting($siteName = 'name')
{

    $name = \App\SiteSetting::where('name', $siteName)->get()[0]->value;


    return $name;


}

function bu_type()
{
    $array = [
        'House',
        'Villa',
        'Shaleh',
    ];
    return $array;


}

function bu_rent()
{
    $array = [

        'Sale',
        'Rent',
    ];

    return $array;


}

function search()
{
    return [
        'price' => 'price',
        'place' => 'Place',
        'rooms' => 'Rooms',
        'type' => 'Type',
        'rent' => 'Rent',
        'square' => 'Square',
        'price_to' => 'Price to',
        'price_from' => 'Price From',


    ];


}

function bu_place()
{
    $array = [

        'Cairo',
        'Giza',
        'Minofya',
        'Mansoura',
        'Behera',
        'Alexandria',
        '6 October',
        'Qaliobia',
        'Gharbia',
        'Sharqia',
        'Elminya',
        'Sohag',
        'Luxor',
        'Swies',
        'Aswan',


    ];
    return $array;

}

function contact()
{

    return [
        'Like',
        'problems',
        'Suggestion',
        'other',

    ];


}

function unReadMessage()
{

    return \App\Contact::where('view', 0)->get();

}

function countUnReadMessage()
{

    return \App\Contact::where('view', 0)->count();

}

function buForUserCount($user_id ,$status){

    return \App\Bu::where('status',$status)->where('user_id',$user_id)->count();


}

function is_active(String $routeName)
{

    return NULL !== request()->segment(1) && request()->segment(1) == $routeName ? 'active' : '';

}




