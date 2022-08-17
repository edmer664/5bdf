<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;
use App\Mail\Franchise;

class EmailController extends Controller
{
    //
    public function franchiseForm(Request $request)
    {
        //"For Franchise Form under Wingers Unlimited:
        // wingersfranchise@5bdf.ph

        // Under NYBB Hot Wings:
        // nybuffalofranchise@5bdf.ph

        // Under NYBB Sports Lounge:
        // nysportsloungefranchise@5bdf.ph"		
        if ($request->brand == 'Wingers Unlimited') {
            // $to = "wingersfranchise@5bdf.ph";
            $to ="edmer.codes@gmail.com";
        } else if ($request->brand == 'NY Buffalo Brads Hot Wings') {
            // $to = "nybuffalofranchise@5bdf.ph";
            $to = "alapateam@gmail.com";
        } else if ($request->brand == 'NY Buffalo Brads Sports Lounge') {
            // $to = "nysportsloungefranchise@5bdf.ph";
            $to = "alapateam@gmail.com";
        } else {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }

        $subject = "Franchise Inquiry:" . $request->firstName . " " . $request->lastName;
        // generate a pdf and send it as attachment
        $message = "A new franchise inquiry has been submitted. Please check the attachment.";
        // use DOMPDF to generate a pdf
        $pdf = PDF::loadView('pdf.franchise', compact('request'));
        // send the pdf as attachment
        // pdf_name
        $pdf_name = "franchise_" . $request->firstName . "_" . $request->lastName . ".pdf";
        // save the pdf file make the dir first
        $pdf->save(public_path('pdf/' . $pdf_name));
        $pdf_path = public_path('pdf/' . $pdf_name);
        Mail::to($to)->queue(new Franchise($request->all(), $pdf_name, $subject, $message,$pdf_path));
        // delete pdf
        unlink($pdf_path);
        return redirect()->back()->with('success', 'Thank you for your interest in our franchise. We will get back to you soon.');
    }
}
