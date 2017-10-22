<div class="form-group {{ $errors->has('banque') ? 'has-error' : ''}}">
    <label for="banque" class="col-md-4 control-label">{{ 'Banque' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="banque" type="text" id="banque" value="{{ $cheque->banque or ''}}" >
        {!! $errors->first('banque', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('num_cheque') ? 'has-error' : ''}}">
    <label for="num_cheque" class="col-md-4 control-label">{{ 'Num Cheque' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="num_cheque" type="number" id="num_cheque" value="{{ $cheque->num_cheque or ''}}" >
        {!! $errors->first('num_cheque', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('montant') ? 'has-error' : ''}}">
    <label for="montant" class="col-md-4 control-label">{{ 'Montant' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="montant" type="number" id="montant" value="{{ $cheque->montant or ''}}" >
        {!! $errors->first('montant', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('echeance') ? 'has-error' : ''}}">
    <label for="echeance" class="col-md-4 control-label">{{ 'Echeance' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="echeance" type="date" id="echeance" value="{{ $cheque->echeance or ''}}" >
        {!! $errors->first('echeance', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('paiement') ? 'has-error' : ''}}">
    <label for="paiement" class="col-md-4 control-label">{{ 'Paiement' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="paiement" type="number" id="paiement" value="{{ $cheque->paiement or ''}}" >
        {!! $errors->first('paiement', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
