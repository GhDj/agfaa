<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cheque extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cheques';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['banque', 'num_cheque', 'montant', 'echeance', 'paiement'];

    
}
