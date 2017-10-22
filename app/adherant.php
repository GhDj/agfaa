<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adherant extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'adherants';

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
    protected $fillable = ['nom', 'prenom', 'lieu', 'dte', 'adr', 'img', 'm_nom', 'm_prenom', 'm_profession', 'm_adr', 'm_tel_g', 'm_tel_d', 'm_tel_t', 'm_email', 'p_nom', 'p_prenom', 'p_profession', 'p_adr', 'p_tel_g', 'p_tel_d', 'p_tel_t', 'p_email', 'a_nom', 'a_prenom', 'a_profession', 'a_adr', 'a_tel_g', 'a_tel_d', 'a_tel_t', 'a_email', 'u_nom', 'u_prenom', 'u_lae', 'u_adr', 'u_tel_g', 'u_tel_d', 'u_tel_t', 'u_email', 'asthme', 'medicamenteuses', 'alimentaire', 'autre', 'ob_med', 'cert_med', 'ac_fr_an'];

    
}
