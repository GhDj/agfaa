<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paiements';

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
    protected $fillable = ['adherant', 'paiement', 'methode', 'date','banque','montant','echeance','num_cheque'];

    
}
