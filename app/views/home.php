<h2 class="text-center my-4">Usuários</h2>
<div
    class="table-responsive"
>
    <table
        class="table table-striped table-hover"
    >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Detalhes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr class="">
                    <td scope="row"><?= $user->id; ?></td>
                    <td><?= $user->name; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><a href="/php-pro/public/user/<?= $user->id; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
</div>