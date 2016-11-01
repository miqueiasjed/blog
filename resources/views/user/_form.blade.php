
    <div id="error"></div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Nome</label>
        <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome', 'id' => 'name']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="role" class="col-sm-2 control-label">Perfil</label>
        <div class="col-sm-10">
            <select name="role" id="role">
                <option value=""> Selecione um Perfil</option>
                <option value="Include"> Include Tecnologia</option>
                <option value="Admin"> Administrador</option>
                <option value="Supervidor"> Supervisor</option>
                <option value="Atendente"> Atendent</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Senha</label>
        <div class="col-sm-10">
            <input type="password" name="password" value="" class="form-control" placeholder="Senha" id="password" />
            <span id="passstrength"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="password_confirm" class="col-sm-2 control-label">Confirmar Senha</label>
        <div class="col-sm-10">
            <input type="password" name="password_confirm" value="" class="form-control" placeholder="Confirmar Senha" id="password_confirm" />
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">Telefone</label>
        <div class="col-sm-10">
            <input type="text" name="phone" value="" class="form-control" placeholder="Telefone" id="phone" data-inputmask='"mask": "(99)#9999-9999"' data-mask/>
        </div>
    </div>
    <div class="form-group">
        <label for="image_profile" class="col-sm-2 control-label">Foto Perfil</label>
        <div class="col-sm-10">
            <input type="file" name="image_profile" value="" class="" id="image_profile"/>
        </div>
    </div>
    <div class="form-group">
        <label for="active" class="col-sm-2 control-label"></label>
        <div class="col-sm-10 checkbox">
            <label>
                <input type="checkbox" name="active" value="1" <?php echo isset($user['active']) ? 'checked' : ''; ?>>
                Ativar
            </label>
        </div>
    </div>
</div>