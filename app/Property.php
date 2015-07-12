<?php namespace App;

use Hashids\Hashids;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{


    protected $fillable = ['client_id'];

    public function getUnitStreet()
    {
        return $this->unit . ', ' . $this->street;

    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function addresses()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

    public function rental_agreement()
    {
        return $this->hasMany('App\RentalAgreement');
    }

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey()
    {
        $hashids = new Hashids('MySecretSalt*(&^%$eo&*^%&r', 20);
        return $hashids->encode($this->getKey());
    }

}
