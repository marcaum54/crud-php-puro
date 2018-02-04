<?php $usuario = get_usuario($_GET['id']); ?>
<form method="post" action="controller.php">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="action" value="<?php echo strtolower($page_title); ?>">

    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label text-right">Nome</label>
        <div class="col-sm-6">
            <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $usuario->nome; ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label text-right">E-mail</label>
        <div class="col-sm-6">
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $usuario->email; ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="nascimento" class="col-sm-2 col-form-label text-right">Data de Nascimento</label>
        <div class="col-sm-1">
            <select name="dia" class="form-control" required>
                <option value="">-</option>
                <?php foreach(range(1, 31) as $dia): ?>
                <option <?php if($usuario->dia == $dia):?>selected<?php endif;?>><?php echo $dia; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-3">
            <select name="mes" class="form-control" required>
                <option value="">-</option>
                <?php foreach(range(1, 12) as $mes): ?>
                <option value="<?php echo $mes; ?>" <?php if($usuario->mes == $mes):?>selected<?php endif;?>><?php echo DateTime::createFromFormat('!m', $mes)->format('F'); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-sm-2">
            <select name="ano" class="form-control" required>
                <option value="">-</option>
                <?php foreach(range(date('Y'), date('Y') - 50) as $ano): ?>
                <option <?php if($usuario->ano == $ano):?>selected<?php endif;?>><?php echo $ano; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-1 offset-md-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>