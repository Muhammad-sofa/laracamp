<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Checkout\Paid;
use Illuminate\Http\Request;
Use App\Models\Checkout;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
     public function update(Request $request, Checkout $checkout)
     {
          $checkout->is_paid = true;
          $checkout->save();

          // Send email to User ke User Sebelumnya
          Mail::to($checkout->user->email)->send(new Paid($checkout));
          $request->session()->flash('success', "Checkout with ID {$checkout->id} has been updated.");
          return redirect(route('admin.dashboard'));
     }
}