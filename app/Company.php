<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id
 * @property string $address
 * @property string $city
 * @property string $code
 * @property string $country
 * @property string $created_at
 * @property string $created_by
 * @property string $deleted_at
 * @property string $deleted_by
 * @property string $description
 * @property string $email
 * @property string $fax
 * @property string $location
 * @property string $logo
 * @property string $name
 * @property string $phone
 * @property string $province
 * @property integer $rating
 * @property string $updated_at
 * @property string $updated_by
 * @property string $website
 * @property string $zipcode
 * @property CompanyGallery[] $companyGalleries
 * @property CompanyGeneralFacility[] $companyGeneralFacilities
 * @property Currency[] $currencies
 * @property GeneralRateAmenity[] $generalRateAmenities
 * @property GeneralRoomAmenity[] $generalRoomAmenities
 * @property Reservation[] $reservations
 * @property Room[] $rooms
 * @property User[] $users
 */
class Company extends Model
{
     use SoftDeletes;
     protected $dates = ['deleted_at'];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'company';
    /**
     * @var array
     */
    protected $fillable = ['address', 'city', 'code', 'country', 
    'created_at', 'created_by', 'deleted_at', 'deleted_by', 'description',
    'email', 'fax', 'location', 'logo', 'name', 'phone', 'province',
    'rating', 'updated_at', 'updated_by', 'website', 'zipcode'];
}
