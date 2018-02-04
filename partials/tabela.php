<div><a href="form.php" class="btn btn-outline-primary" role="button">Cadastrar</a></div>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Nome</th>
            <th>Data Nascimento</th>
            <th>E-mail</th>
            <th class="text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if( $usuarios = get_usuarios() ): ?>
            <?php foreach( $usuarios as $usuario ): ?>
            <tr>
                <td class="text-center"><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->nome; ?></td>
                <td><?php echo date_create_from_format('Y-m-d', $usuario->nascimento)->format('d/m/Y'); ?></td>
                <td><?php echo $usuario->email; ?></td>
                <td class="text-center">
                    <a href="form.php?id=<?php echo $usuario->id; ?>" class="btn btn-outline-warning">Editar</a>
                    <a href="controller.php?action=delete&id=<?php echo $usuario->id; ?>" class="btn btn-outline-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>