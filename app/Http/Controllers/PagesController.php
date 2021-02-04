<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $cardsPath = "../resources/views/cards.json";
        $cardsJSON = file_get_contents($cardsPath);
        
        return view('index',["cards" => $cardsJSON, "title" => "Jamaica Eternal Tours"]);
    }

    public function book() {
        return view("book");
    }

    public function aboutus() {
        return view("about-us", ["title" => "Welcome To JETT"]);
    }

    public function contactus() {
        return redirect("/book?selectedForm=tours");    
    }

    public function airportTransfer() {
        $hotelsPath = "../resources/views/hotels.json";
        $hotelsJSON = file_get_contents($hotelsPath);
        return view("transfer",["hotels" => json_decode($hotelsJSON) -> hotels,"title" => "Jamaica Eternal Airport Transfers"]);
    }
    public function hotels() {
        $hotelsPath = "../resources/views/hotels.json";
        $hotelsJSON = file_get_contents($hotelsPath);
        $hotels = json_decode($hotelsJSON) -> hotels;
        echo(json_encode($hotels));
    }
    public function sendEmail(Request $req) {
        $email = $req -> input('email');
        $name = $req -> input("name");
        $message = $req -> input("message");
        $mailBody = "Message from " . $name . " " . $email . " says" . $message;
        
        mail("johnbaker11568@gmail.com","Book Tour",$mailBody);
        echo(json_encode(["success" => true, "message" => "Email Sent"]));
    }
}
