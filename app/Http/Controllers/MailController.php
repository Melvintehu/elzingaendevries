<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MailController extends Controller
{
   public function contactMail(Request $request)
   {
   		$name = $request->input('naam');
	    $email = $request->input('emailadres');

	    $telefoonnummer = $request->input('telefoonnummer');
	    $bericht = $request->input('bericht');

	    $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
	        $beautymail->send('emails.contact', ['telefoonnummer' => $telefoonnummer, 'bericht' => $bericht], function($message) use ($name, $email)
	        {
	            $message
	                ->from($email, $name)
	                ->to('melvindrachten@hotmail.com', 'Mentor4you')
	                ->subject('Contactbericht van ' . $name);
	        });


      $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
          $beautymail->send('emails.bevestiging', [], function($message) use ($name, $email)
          {
              $message
                  ->from('info@elzingaendevries.nl', 'Elzinga en De Vries betimmeringen')
                  ->to($email, $name)
                  ->subject('Elzinga en De Vries Betimmeringen, bevestiging van bericht');
          });

          $request->session()->flash('succeed', 'Uw email is verzonden!');

	        return redirect('/contact');
   }


}
