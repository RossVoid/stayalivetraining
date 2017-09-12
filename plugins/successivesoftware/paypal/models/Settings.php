<?php namespace SuccessiveSoftware\Paypal\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'successivesoftware_paypal_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
    
    public function initSettingsData()
    {
        $this->mode = 0;
        $this->paypal_email = '';
        $this->currency_code = '';
        $this->return_page = '';
    }
}
