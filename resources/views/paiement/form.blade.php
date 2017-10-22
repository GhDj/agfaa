<div class="form-group {{ $errors->has('adherant') ? 'has-error' : ''}}">
    <label for="adherant" class="col-md-4 control-label">{{ 'Adhérant' }}</label>
    <div class="col-md-6">
        <select name="adherant" id="adherant" class="form-control">
            <option selected value="0">Sélectioner l'adhérant</option>
            @foreach( \App\adherant::all() as $a )

                <option value="{{ $a->id }}">{{ $a->nom }} {{ $a->prenom }}</option>

            @endforeach
        </select>
        {!! $errors->first('adherant', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('paiement') ? 'has-error' : ''}}">
    <label for="paiement" class="col-md-4 control-label">{{ 'Paiement' }}</label>
    <div class="col-md-6">
        <select name="paiement" class="form-control" id="paiement">
            <option value="null">Sélectionner</option>
            @foreach (json_decode('{"Totale":"Totale","Partiel":"Partiel"}', true) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($paiement->paiement) && $paiement->paiement == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('paiement', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('methode') ? 'has-error' : ''}}">
    <label for="methode" class="col-md-4 control-label">{{ 'Méthodes' }}</label>
    <div class="col-md-6">
        <select name="methode" class="form-control" id="methode">
            @foreach (json_decode('{"Cheque":"Chèque","Espece":"Espèce"}', true) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($paiement->methode) && $paiement->methode == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('methode', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group {{ $errors->has('methode') ? 'has-error' : ''}}">
    <label for="methode" class="col-md-4 control-label">{{ 'Chéques' }}</label>
    <div class="col-md-6">
        <table class="table-responsive table" id="data_table">
            <thead>
            <tr>
                <th>Numéro du chéque</th><th>Banque</th><th>Montant</th><th>Echéance</th><th></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input class="form-control" type="number" id="num_cheque"></td>
                    <td><input class="form-control" type="text" id="banque"></td>
                    <td><input class="form-control" type="number" id="montant"></td>
                    <td><input class="form-control" type="date" id="echeance"></td>

                    <td><input type="button" class="add form-control" onclick="add_row();" value="Ajouter"></td>

                </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="col-md-4 control-label">{{ 'Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="date" type="date" id="date" value="{{ $paiement->date or ''}}">
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('montant') ? 'has-error' : ''}}">
    <label for="paiement" class="col-md-4 control-label">{{ 'Montant' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="number" type="montant" id="montant" value="{{ $paiement->montant or ''}}">
        {!! $errors->first('montant', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Enregistrer' }}">
    </div>
</div>



<script>
    function edit_row(no)
    {
        document.getElementById("edit_button"+no).style.display="none";
        document.getElementById("save_button"+no).style.display="block";

        var name=document.getElementById("name_row"+no);
        var country=document.getElementById("country_row"+no);
        var age=document.getElementById("age_row"+no);

        var name_data=name.innerHTML;
        var country_data=country.innerHTML;
        var age_data=age.innerHTML;

        name.innerHTML="<input type='text' id='name_text"+no+"' value='"+name_data+"'>";
        country.innerHTML="<input type='text' id='country_text"+no+"' value='"+country_data+"'>";
        age.innerHTML="<input type='text' id='age_text"+no+"' value='"+age_data+"'>";
    }

    function save_row(no)
    {
        var name_val=document.getElementById("num_cheque"+no).value;
        var country_val=document.getElementById("banque"+no).value;
        var age_val=document.getElementById("montant"+no).value;
        var new_echeance=document.getElementById("echeance"+no).value;

        document.getElementById("num_cheque"+no).value =name_val;
        document.getElementById("banque"+no).value =country_val;
        document.getElementById("montant"+no).value =age_val;
        document.getElementById("echeance"+no).value =new_echeance;

        document.getElementById("edit_button"+no).style.display="block";
        document.getElementById("save_button"+no).style.display="none";
    }

    function delete_row(no)
    {
        document.getElementById("row"+no+"").outerHTML="";
    }

    function add_row()
    {
        var num_cheque=document.getElementById("num_cheque").value;
        var new_banque=document.getElementById("banque").value;
        var new_montant=document.getElementById("montant").value;
        var new_echeance=document.getElementById("echeance").value;

        var table=document.getElementById("data_table");
        var table_len=(table.rows.length)-1;
        var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='name_row"+table_len+"'><input class='form-control' name='num_cheque["+table_len+"]' type='number' id='num_chque["+table_len+"]' value="+num_cheque+"></td><td id='country_row"+table_len+"'><input class='form-control' name='banque["+table_len+"]' type='text' id='banque["+table_len+"]' value="+new_banque+"></td><td id='age_row"+table_len+"'><input class='form-control' name='montant["+table_len+"]' type='number' id='montant["+table_len+"]' value="+new_montant+"></td><td id='age_row"+table_len+"'><input class='form-control' name='echeance["+table_len+"]' type='date' id='echeance["+table_len+"]' value="+new_echeance+"></td><td><input type='button' value='Supprimer' class='delete form-control' onclick='delete_row("+table_len+")'></td></tr>";

        document.getElementById("num_cheque").value = "";
        document.getElementById("banque").value = "";
        document.getElementById("montant").value = "";
        document.getElementById("echeance").value = "";
    }
</script>

