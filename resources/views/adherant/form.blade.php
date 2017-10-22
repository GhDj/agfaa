<!--      Wizard container        -->
<div class="wizard-container">
    <div class="card wizard-card" data-color="red" id="wizard">

            <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

            <div class="wizard-header">
                <h3 class="wizard-title">
                    Ajouter adhérant
                </h3>
               <!-- <h5>This information will let us know more about you.</h5>-->
            </div>
            <div class="wizard-navigation">
                <ul>
                    <li><a href="#enfant" data-toggle="tab">Enfant</a></li>
                    <li><a href="#mere" data-toggle="tab">Mère</a></li>
                    <li><a href="#pere" data-toggle="tab">Père</a></li>
                    <li><a href="#arl" data-toggle="tab">Autre Responsable Légal </a></li>
                    <li><a href="#casu" data-toggle="tab">Cas d'Urgence </a></li>
                    <li><a href="#medic" data-toggle="tab">Renseignements Médicaux </a></li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane" id="enfant">
                    <div class="row">
                        <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                            <label for="nom" class="col-md-4 control-label">{{ 'Nom ' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="nom" type="text" id="nom" value="{{ $adherant->nom or ''}}">
                                {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('prenom') ? 'has-error' : ''}}">
                            <label for="prenom" class="col-md-4 control-label">{{ 'Prénom ' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="prenom" type="text" id="prenom" value="{{ $adherant->prenom or ''}}">
                                {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('lieu') ? 'has-error' : ''}}">
                            <label for="lieu" class="col-md-4 control-label">{{ 'Lieu' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="lieu" type="text" id="lieu" value="{{ $adherant->lieu or ''}}">
                                {!! $errors->first('lieu', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('dte') ? 'has-error' : ''}}">
                            <label for="dte" class="col-md-4 control-label">{{ 'Date de Naissance ' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="dte" type="date" id="dte" value="{{ $adherant->dte or ''}}">
                                {!! $errors->first('dte', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('adr') ? 'has-error' : ''}}">
                            <label for="adr" class="col-md-4 control-label">{{ 'Adresse  ' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="adr" type="text" id="adr" value="{{ $adherant->adr or ''}}">
                                {!! $errors->first('adr', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
                            <label for="img" class="col-md-4 control-label">{{ 'Photo' }}</label>
                            <div class="col-md-6">
                                <input class="" name="img" type="file" id="img" value="{{ $adherant->img or ''}}">
                                {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('ac_fr_an') ? 'has-error' : ''}}">
                            <label for="ac_fr_an" class="col-md-4 control-label">{{ 'Académies Fréquentées Anterieurement ' }}</label>
                            <div class="col-md-6">
        <textarea class="form-control" rows="5" name="ac_fr_an" type="textarea"
                  id="ac_fr_an">{{ $adherant->ac_fr_an or ''}}</textarea>
                                {!! $errors->first('ac_fr_an', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="mere">
                    <h4 class="info-text">Mère</h4>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group {{ $errors->has('m_nom') ? 'has-error' : ''}}">
                                <label for="m_nom" class="col-md-4 control-label">{{ 'M Nom' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="m_nom" type="text" id="m_nom" value="{{ $adherant->m_nom or ''}}">
                                    {!! $errors->first('m_nom', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('m_prenom') ? 'has-error' : ''}}">
                                <label for="m_prenom" class="col-md-4 control-label">{{ 'Prénom ' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="m_prenom" type="text" id="m_prenom" value="{{ $adherant->m_prenom or ''}}">
                                    {!! $errors->first('m_prenom', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('m_profession') ? 'has-error' : ''}}">
                                <label for="m_profession" class="col-md-4 control-label">{{ 'Profession' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="m_profession" type="text" id="m_profession"
                                           value="{{ $adherant->m_profession or ''}}">
                                    {!! $errors->first('m_profession', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('m_adr') ? 'has-error' : ''}}">
                                <label for="m_adr" class="col-md-4 control-label">{{ 'Adresse ' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="m_adr" type="text" id="m_adr" value="{{ $adherant->m_adr or ''}}">
                                    {!! $errors->first('m_adr', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('m_tel_g') ? 'has-error' : ''}}">
                                <label for="m_tel_g" class="col-md-4 control-label">{{ 'Tel(GSM) ' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="m_tel_g" type="number" id="m_tel_g" value="{{ $adherant->m_tel_g or ''}}">
                                    {!! $errors->first('m_tel_g', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('m_tel_d') ? 'has-error' : ''}}">
                                <label for="m_tel_d" class="col-md-4 control-label">{{ 'Tel(Domicile) ' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="m_tel_d" type="number" id="m_tel_d" value="{{ $adherant->m_tel_d or ''}}">
                                    {!! $errors->first('m_tel_d', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('m_tel_t') ? 'has-error' : ''}}">
                                <label for="m_tel_t" class="col-md-4 control-label">{{ 'Tel(Travail)' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="m_tel_t" type="number" id="m_tel_t" value="{{ $adherant->m_tel_t or ''}}">
                                    {!! $errors->first('m_tel_t', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('m_email') ? 'has-error' : ''}}">
                                <label for="m_email" class="col-md-4 control-label">{{ 'Email' }}</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="m_email" type="email" id="m_email" value="{{ $adherant->m_email or ''}}">
                                    {!! $errors->first('m_email', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="pere">
                    <div class="row">
                        <h4 class="info-text"> Père</h4>
                        <div class="form-group {{ $errors->has('p_nom') ? 'has-error' : ''}}">
                            <label for="p_nom" class="col-md-4 control-label">{{ 'Nom' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="p_nom" type="text" id="p_nom" value="{{ $adherant->p_nom or ''}}">
                                {!! $errors->first('p_nom', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('p_prenom') ? 'has-error' : ''}}">
                            <label for="p_prenom" class="col-md-4 control-label">{{ 'Prénom' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="p_prenom" type="text" id="p_prenom" value="{{ $adherant->p_prenom or ''}}">
                                {!! $errors->first('p_prenom', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('p_profession') ? 'has-error' : ''}}">
                            <label for="p_profession" class="col-md-4 control-label">{{ 'Profession' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="p_profession" type="text" id="p_profession"
                                       value="{{ $adherant->p_profession or ''}}">
                                {!! $errors->first('p_profession', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('p_adr') ? 'has-error' : ''}}">
                            <label for="p_adr" class="col-md-4 control-label">{{ 'Adresse ' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="p_adr" type="text" id="p_adr" value="{{ $adherant->p_adr or ''}}">
                                {!! $errors->first('p_adr', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('p_tel_g') ? 'has-error' : ''}}">
                            <label for="p_tel_g" class="col-md-4 control-label">{{ 'Tel (GSM)' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="p_tel_g" type="number" id="p_tel_g" value="{{ $adherant->p_tel_g or ''}}">
                                {!! $errors->first('p_tel_g', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('p_tel_d') ? 'has-error' : ''}}">
                            <label for="p_tel_d" class="col-md-4 control-label">{{ 'Tel(Domicile) ' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="p_tel_d" type="number" id="p_tel_d" value="{{ $adherant->p_tel_d or ''}}">
                                {!! $errors->first('p_tel_d', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('p_tel_t') ? 'has-error' : ''}}">
                            <label for="p_tel_t" class="col-md-4 control-label">{{ 'Tel(Travail)' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="p_tel_t" type="number" id="p_tel_t" value="{{ $adherant->p_tel_t or ''}}">
                                {!! $errors->first('p_tel_t', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('p_email') ? 'has-error' : ''}}">
                            <label for="p_email" class="col-md-4 control-label">{{ 'Email' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="p_email" type="email" id="p_email" value="{{ $adherant->p_email or ''}}">
                                {!! $errors->first('p_email', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="arl">
                    <div class="row">
                        <h4 class="info-text">Autre Responsable Légal </h4>
                        <div class="form-group {{ $errors->has('a_nom') ? 'has-error' : ''}}">
                            <label for="a_nom" class="col-md-4 control-label">{{ 'Nom' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="a_nom" type="text" id="a_nom" value="{{ $adherant->a_nom or ''}}">
                                {!! $errors->first('a_nom', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('a_prenom') ? 'has-error' : ''}}">
                            <label for="a_prenom" class="col-md-4 control-label">{{ 'Prénom' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="a_prenom" type="text" id="a_prenom" value="{{ $adherant->a_prenom or ''}}">
                                {!! $errors->first('a_prenom', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('a_profession') ? 'has-error' : ''}}">
                            <label for="a_profession" class="col-md-4 control-label">{{ 'Profession' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="a_profession" type="text" id="a_profession"
                                       value="{{ $adherant->a_profession or ''}}">
                                {!! $errors->first('a_profession', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('a_adr') ? 'has-error' : ''}}">
                            <label for="a_adr" class="col-md-4 control-label">{{ 'Adresse' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="a_adr" type="text" id="a_adr" value="{{ $adherant->a_adr or ''}}">
                                {!! $errors->first('a_adr', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('a_tel_g') ? 'has-error' : ''}}">
                            <label for="a_tel_g" class="col-md-4 control-label">{{ 'Tel (GSM)' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="a_tel_g" type="number" id="a_tel_g" value="{{ $adherant->a_tel_g or ''}}">
                                {!! $errors->first('a_tel_g', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('a_tel_d') ? 'has-error' : ''}}">
                            <label for="a_tel_d" class="col-md-4 control-label">{{ 'Tel(Domicile) ' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="a_tel_d" type="number" id="a_tel_d" value="{{ $adherant->a_tel_d or ''}}">
                                {!! $errors->first('a_tel_d', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('a_tel_t') ? 'has-error' : ''}}">
                            <label for="a_tel_t" class="col-md-4 control-label">{{ 'Tel (Travail)' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="a_tel_t" type="number" id="a_tel_t" value="{{ $adherant->a_tel_t or ''}}">
                                {!! $errors->first('a_tel_t', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('a_email') ? 'has-error' : ''}}">
                            <label for="a_email" class="col-md-4 control-label">{{ 'Email' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="a_email" type="email" id="a_email" value="{{ $adherant->a_email or ''}}">
                                {!! $errors->first('a_email', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="casu">
                    <div class="row">
                        <h4 class="info-text"> Personnes à Appeler En Cas D’Urgence</h4>
                        <div class="form-group {{ $errors->has('u_nom') ? 'has-error' : ''}}">
                            <label for="u_nom" class="col-md-4 control-label">{{ 'Nom' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="u_nom" type="text" id="u_nom" value="{{ $adherant->u_nom or ''}}">
                                {!! $errors->first('u_nom', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('u_prenom') ? 'has-error' : ''}}">
                            <label for="u_prenom" class="col-md-4 control-label">{{ 'Prénom' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="u_prenom" type="text" id="u_prenom" value="{{ $adherant->u_prenom or ''}}">
                                {!! $errors->first('u_prenom', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('u_lae') ? 'has-error' : ''}}">
                            <label for="u_lae" class="col-md-4 control-label">{{ "Lien avec l'enfant" }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="u_lae" type="text" id="u_lae" value="{{ $adherant->u_lae or ''}}">
                                {!! $errors->first('u_lae', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('u_adr') ? 'has-error' : ''}}">
                            <label for="u_adr" class="col-md-4 control-label">{{ 'Adresse' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="u_adr" type="text" id="u_adr" value="{{ $adherant->u_adr or ''}}">
                                {!! $errors->first('u_adr', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('u_tel_g') ? 'has-error' : ''}}">
                            <label for="u_tel_g" class="col-md-4 control-label">{{ 'Tel (GSM)' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="u_tel_g" type="number" id="u_tel_g" value="{{ $adherant->u_tel_g or ''}}">
                                {!! $errors->first('u_tel_g', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('u_tel_d') ? 'has-error' : ''}}">
                            <label for="u_tel_d" class="col-md-4 control-label">{{ 'Tel (Domicile)' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="u_tel_d" type="number" id="u_tel_d" value="{{ $adherant->u_tel_d or ''}}">
                                {!! $errors->first('u_tel_d', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('u_tel_t') ? 'has-error' : ''}}">
                            <label for="u_tel_t" class="col-md-4 control-label">{{ 'Tel (Travail)' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="u_tel_t" type="number" id="u_tel_t" value="{{ $adherant->u_tel_t or ''}}">
                                {!! $errors->first('u_tel_t', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('u_email') ? 'has-error' : ''}}">
                            <label for="u_email" class="col-md-4 control-label">{{ 'Email' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="u_email" type="email" id="u_email" value="{{ $adherant->u_email or ''}}">
                                {!! $errors->first('u_email', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="medic">
                    <div class="container text-center">
                        <h4 class="info-text">Renseignements Médicaux </h4>
                        <h3>Allergies :</h3>
                        <div class="form-group {{ $errors->has('asthme') ? 'has-error' : ''}}">
                        <label for="asthme" class="">{{ 'Asthme' }}</label>

                            <input class="" name="asthme" type="radio" id="asthme" value="Oui"> Oui
                            <input class="" name="asthme" type="radio" id="asthme" value="Non"> Non
                            {!! $errors->first('asthme', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('medicamenteuses') ? 'has-error' : ''}}">
                            <label for="medicamenteuses" class="">{{ 'Médicamenteuses ' }}</label>

                                <input class="" name="medicamenteuses" type="radio" id="medicamenteuses" value="oui"> Oui
                                <input class="" name="medicamenteuses" type="radio" id="medicamenteuses" value="non"> Non
                                {!! $errors->first('medicamenteuses', '<p class="help-block">:message</p>') !!}

                        </div>
                        <div class="form-group {{ $errors->has('alimentaire') ? 'has-error' : ''}}">
                            <label for="alimentaire" class="">{{ 'Alimentaire' }}</label>

                                <input class="" name="alimentaire" type="radio" id="alimentaire" value="oui"> Oui
                                <input class="" name="alimentaire" type="radio" id="alimentaire" value="non"> Non
                                {!! $errors->first('alimentaire', '<p class="help-block">:message</p>') !!}

                        </div>
                        <div class="form-group {{ $errors->has('autre') ? 'has-error' : ''}}">
                            <label for="autre" class="col-md-4 control-label">{{ 'Autre' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="autre" type="text" id="autre" value="{{ $adherant->autre or ''}}">
                                {!! $errors->first('autre', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('ob_med') ? 'has-error' : ''}}">
                            <label for="ob_med" class="col-md-4 control-label">{{ 'Ob Med' }}</label>
                            <div class="col-md-6">
            <textarea class="form-control" rows="5" name="ob_med" type="textarea"
                      id="ob_med">{{ $adherant->ob_med or ''}}</textarea>
                                {!! $errors->first('ob_med', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('cert_med') ? 'has-error' : ''}}">
                            <label for="cert_med" class="col-md-4 control-label">{{ 'Cert Med' }}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="cert_med" type="file" id="cert_med" value="{{ $adherant->cert_med or ''}}">
                                {!! $errors->first('cert_med', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wizard-footer">
                <div class="pull-right">
                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Suivant' />
                    <input type='submit' class='btn btn-finish btn-fill  btn-primary btn-wd' name='finish' value='{{ $submitButtonText or 'Enregistrer' }}' />
                </div>
                <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Précédent' />

                    <div class="footer-checkbox">
                        <div class="col-sm-12">

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

    </div>
</div>
<!-- wizard container -->







