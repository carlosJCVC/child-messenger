
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label>Nombre</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">N</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ isset($suscriptor) ? $suscriptor->name : '' }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
                {{ $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label>Apellido</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">L</span>
            </div>
            <input type="text" class="form-control" placeholder="Apellido" name="lastname" value="{{ isset($suscriptor) ? $suscriptor->lastname : '' }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback {{ $errors->has('lastname')? 'd-block' : '' }}">
                {{ $errors->has('lastname')? $errors->first('lastname') : 'El campo de Apellido es requerido'  }}
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6 mb-3">
        <label>CI</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">CI</span>
            </div>
            <input type="text" class="form-control" placeholder="CI" name="CI" value="{{ isset($suscriptor) ? $suscriptor->CI : '' }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            <div class="invalid-feedback {{ $errors->has('CI')? 'd-block' : '' }}">
                {{ $errors->has('ci')? $errors->first('ci') : 'El campo de CI es requerido'  }}
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label>Ciudad</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">C</span>
            </div>
            <input type="text" class="form-control" placeholder="Ciudad" name="City" value="{{ isset($suscriptor) ? $suscriptor->City : '' }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback {{ $errors->has('City')? 'd-block' : '' }}">
                {{ $errors->has('City')? $errors->first('City') : 'El campo de ciudad es requerido'  }}
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6 mb-3">
        <label>E-mail</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ isset($suscriptor) ? $suscriptor->email : '' }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback {{ $errors->has('email')? 'd-block' : '' }}">
                {{ $errors->has('email')? $errors->first('email') : 'El campo de E-mail es requerido'  }}
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label>Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback {{ $errors->has('password')? 'd-block' : '' }}">
                {{ $errors->has('password')? $errors->first('password') : 'Este campo es importante no debe estar vacio.'  }}
            </div>
        </div>
    </div>
    
</div>
