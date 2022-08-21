<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;
use App\Mail\Franchise;
use Illuminate\Support\Facades\Log;

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
            if (env('APP_ENV') == 'production') {
                $to = "wingersfranchise@5bdf.ph";
            } else {
                $to = "edmer.codes@gmail.com";
            }
        } else if ($request->brand == 'NY Buffalo Brads Hot Wings') {
            if (env('APP_ENV') == 'production') {
                $to = "nybuffalofranchise@5bdf.ph";
            } else {
                $to = "alapateam@gmail.com";
            }
        } else if ($request->brand == 'NY Buffalo Brads Sports Lounge') {
            if (env('APP_ENV') == 'production') {
                $to = "nysportsloungefranchise@5bdf.ph";
            } else {
                $to = "alapateam@gmail.com";
            }
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
        Mail::to($to)->queue(new Franchise($request->all(), $pdf_name, $subject, $message, $pdf_path));
        // delete pdf
        unlink($pdf_path);
        return redirect()->back()->with('success', 'Thank you for your interest in our franchise. We will get back to you soon.');
    }


    public function careerForm(Request $request)
    {
        Log::info($request->all());
        if (env('APP_ENV') == 'production') {
            $TO = "recruitment@5bdf.ph";
        } else {
            $TO = "edmer.codes@gmail.com";
        }
        // store files temporarily
        $files = [];
        foreach ($request->docs as $file) {
            Log::info('test');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
            array_push($files, public_path('uploads/' . $file_name));
        }
        Log::info($files);

        $subject = "Career Inquiry:" . $request->firstName . " " . $request->lastName;

        Mail::send('emails.career', ['request' => $request->all()], function ($message) use ($files, $subject, $TO) {
            $message->from('noreply@5bdf.ph', '5BDF Website');
            $message->subject($subject);
            $message->to($TO);
            foreach ($files as $file) {
                $message->attach($file, [
                    'as' => 'attachment.pdf',
                    'mime' => ' application/pdf',
                ]);
            }
        });
        // delete files
        foreach ($files as $file) {
            unlink($file);
        }


        return redirect()->back()->with('success', 'Thank you for your interest in our company. We will get back to you soon.');
    }


    public function contactForm(Request $request)
    {
        if (env('APP_ENV') == 'production') {
            $TO = "headoffice@5bdf.ph";
        } else {
            $TO = "alapateam@gmail.com";
        }
        $subject = "Contact Inquiry:" . $request->name;
        Mail::send('emails.contact', ['request' => $request->all()], function ($message) use ($subject, $TO) {
            $message->from('noreply@5bdf.ph', '5BDF Website');
            $message->subject($subject);
            $message->to($TO);
        });
        return redirect()->back()->with('success', 'Thank you for your interest in our company. We will get back to you soon.');
    }
}
