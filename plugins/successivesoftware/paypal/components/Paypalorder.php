<?php namespace SuccessiveSoftware\Paypal\Components;

use Cache;
use Request;
use SuccessiveSoftware\Paypal\Models\Order;
use Cms\Classes\ComponentBase;
use SuccessiveSoftware\Paypal\Models\Settings;
use System\Classes\ApplicationException;

class Paypalorder extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Paypal Order',
            'description' => 'Create Order.'
        ];
    }

    public function onRun()
    {
        $success_page = strtolower(Settings::get('success_pagename'));
        if(isset($_REQUEST['txn_id'])){
            $txn_id = $_REQUEST['txn_id'];
            $first_name = $_REQUEST['first_name'];
            $last_name = $_REQUEST['last_name'];
            $payment_gross = $_REQUEST['payment_gross'];
            $payment_status = $_REQUEST['payment_status'];
            $payment_date = $_REQUEST['payment_date'];
            Order::create([
                'transaction_id' => $txn_id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'total' => $payment_gross,
                'payment_status' => $payment_status,
                'order_date' => $payment_date,
            ]);
            return redirect($success_page)->with('msg','Payment Success...*****');
        }
        $this->page->title = 'Payment Completed Successfully';
    }

}

?>
