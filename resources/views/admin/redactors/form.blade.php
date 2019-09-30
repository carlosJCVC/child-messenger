
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label>Nombre</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">N</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre" name="firstname" onkeypress="return SoloLetras(event)" value="{{ isset($redactor) ? $redactor->firstname : old('firstname') }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            <div class="invalid-feedback {{ $errors->has('firstname')? 'd-block' : '' }}">
                {{ $errors->has('firstname')? $errors->first('firstname') : 'El campo de Nombre es requerido'  }}
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label>Apellido</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">L</span>
            </div>
            <input type="text" class="form-control" placeholder="Apellido" name="lastname" onkeypress="return SoloLetras(event)" value="{{ isset($redactor) ? $redactor->lastname : old('lastname') }}" required>
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
        <label>Nombre de usuario</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">U</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" value="{{ isset($redactor) ? $redactor->username : old('username') }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            <div class="invalid-feedback {{ $errors->has('username')? 'd-block' : '' }}">
                {{ $errors->has('username')? $errors->first('username') : 'El campo de Nombre de usuario es requerido'  }}
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label>Fecha de nacimiento</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">D</span>
            </div>
            <input type="date" class="form-control" id="datepicker" name="birthdate" value="{{ isset($redactor) ? $redactor->birthdate : old('birthdate') }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback {{ $errors->has('birthdate')? 'd-block' : '' }}">
                {{ $errors->has('birthdate')? $errors->first('birthdate') : 'El campo de Fecha de nacimiento es requerido'  }}
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4 mb-3">
        <label>E-mail</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ isset($redactor) ? $redactor->email : old('email') }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback {{ $errors->has('redactor')? 'd-block' : '' }}">
                {{ $errors->has('email')? $errors->first('email') : 'El campo de E-mail es requerido'  }}
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <label>C.I.</label>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">CI</span>
            </div>
            <input type="text" class="form-control" placeholder="C.I." name="ci" onkeypress="return numero(event)"  value="{{ isset($redactor) ? $redactor->ci : old('ci') }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback {{ $errors->has('ci')? 'd-block' : '' }}">
                {{ $errors->has('ci')? $errors->first('ci') : 'Este campo de C.I. es requerido.'  }}
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <label>Telefono/Celular</label>
                              
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">P</span>
            </div>
            <input type="text" class="form-control" placeholder="Telefono" name="phone" onkeypress="return numero(event)" value="{{ isset($redactor) ? $redactor->phone : old('phone') }}" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback {{ $errors->has('phone')? 'd-block' : '' }}">
                {{ $errors->has('phone')? $errors->first('phone') : 'Este campo de Telefono o Celular es requerido.'  }}
            </div>
        </div>
    </div>
   
</div>

<div class="form-row">
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
    <div class="col-md-6 mb-3">
        <label>Confirm Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirm" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback {{ $errors->has('password_confirm')? 'd-block' : '' }}">
                {{ $errors->has('password_confirm')? $errors->first('password_confirm') : 'Este campo es importante no debe estar vacio.'  }}
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script >
       function numero (e) {
        key=e.keyCode || e.which;
        teclado=String.fromCharCode(key);
        numeros="0123456789";
        especiales="8-37-38-46";
        teclado_especial=false;
        for(var i in especiales){
        if(key==especiales[i]){
        teclado_especial=true;
            }  
         }
        if (numeros.indexOf(teclado)==-1 && !teclado_especial){
        return false;
                 }
        }
                                   
    </script>
 
    <script >
         function SoloLetras (e) {
        key=e.keyCode || e.which;
        teclado=String.fromCharCode(key);
        letras="abcdefghijklmnñopqrstuvwxyz";
        especiales="8-37-38-46-164";
        teclado_especial=false;
        for(var i in especiales){
             if(key==especiales[i]){
               teclado_especial=true;
               break;
            }  
         }
        if (letras.indexOf(teclado)==-1 && !teclado_especial){
        return false;
                 }
        }
                                   
    </script>
 @endsection  