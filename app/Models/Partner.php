<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use SoftDeletes;

   protected $fillable = [

'name',
'internal_code',
'partner_type',
'status',

'logo_link',
'logo',
'website',
'linkedin',
'description',

'address_line1',
'address_line2',
'city',
'state',
'country',
'postal_code',

'contact_name',
'contact_email',
'contact_phone',
'country_code',

'contract_start',
'contract_end',
'contract_file',
'contract_notes',

];

   
}