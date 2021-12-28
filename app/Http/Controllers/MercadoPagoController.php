<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago;

class MercadoPagoController extends Controller
{
    public function createRecurring(Request $request) {
        date_default_timezone_set("UTC");

        $payment = new MercadoPago\Preapproval();

        $payment->payer_email = $request->get("email");
        $payment->auto_recurring = array(
            "frequency" => 1,
            "frequency_type" => "months",
            "transaction_amount" => $request->get("value"),
            "currency_id" => "BRL",
            "start_date" => date("c")
        );
        $payment->preapproval_plan_id = $request->get("plan");
        $payment->payment_method_id = $request->get("card_flag");
        $payment->card_id = $request->get("card");

        try {
            $payment->save();
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }

    public function cancelRecurring(Request $request) {
        $payment = new MercadoPago\Preapproval();

        $payment = $payment->search(array(
            "payer_email" => $request->get("email")
        ));

        $payment->status = "cancelled";

        try {
            $payment->save();
        } catch (\Exception $e) {
            echo $e->getTraceAsString();
        }
    }
}
