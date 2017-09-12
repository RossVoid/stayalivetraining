<?php namespace SuccessiveSoftware\Paypal\Components;

use Cache;
use Illuminate\Support\Facades\URL;
use SuccessiveSoftware\Paypal\Models\Settings;
use Request;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Paypal extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Paypal Payment',
            'description' => 'Paypal Payment through paypal button.'
        ];
    }

    public function defineProperties()
    {
        return [
            'item_name' => [
                'title'             => 'Product Name',
                'description'       => 'product name',
                'type'              => 'string',
                'default'           => 'My Product'
            ],
            'amount' => [
                'title'             => 'Amount',
                'type'              => 'string',
                'default'           => '1',
                'placeholder'       => 'Enter the amount',
                'validationPattern' => '^[0-9a-zA-Z\s]+$',
                'validationMessage' => 'The amount is required.'
            ],
            'type' => [
                'title'             => 'Type',
                'description'       => 'Buy now or Donation or Subscription',
                'type'              => 'dropdown',
                'default'           => 'buynow',
                'placeholder'       => 'Select units',
                'options'           => ['buynow'=>'Buy Now', 'donate'=>'Donate']
            ]
        ];
    }

    public function onRun()
    {
        $this->page['paymentInfo'] = json_decode($this->info());
    }
	public function info()
	{
        $text = "Buy Now";
        $cmd = "_xclick";
		$paypal_email = Settings::get('paypal_email');
		$currency_code = Settings::get('currency_code');
        $item_name = Settings::get('item_name');
        $return_page = URL::to('/')."/".Settings::get('return_page');
		$mode = Settings::get('mode');
		$url = ($mode == 1) ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';
        $env = ($mode == 1) ? 'www.sandbox' : 'www';
        switch ($this->property('type')){
            case "buynow":
                $text = "Buy Now";
                $cmd = "_xclick";
                break;
            case "donate":
                $text = "Donate";
                $cmd = "_donations";
                break;
        }
		$data = ['type' => $this->property('type'), 'amount' =>	$this->property('amount'), 'paypal_email' => $paypal_email, 'currency_code' =>$currency_code, 'url'=>$url, 'env'=>$env, 'text'=>$text, 'item_name'=>$item_name, 'cmd'=>$cmd, 'return'=>$return_page ];
		return json_encode($data);
	}

}

?>
