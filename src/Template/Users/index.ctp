<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h3><?= __('Users') ?></h3>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('first_name',['Nombre']) ?></th>
                        <th scope="col"><?= $this->Paginator->sort('last_name',['Apellido']) ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email',['e-mail']) ?></th>
                        <th scope="col"><?= $this->Paginator->sort('role',['Rol']) ?></th>
                        <th scope="col"><?= $this->Paginator->sort('active',['Estado']) ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->active) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $user->id],['class'=>'btn btn-sm btn-primary']) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $user->id], ['confirm' => __('Eliminar Usuario # {0}?', $user->id), 'class'=>'btn btn-sm btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                <?= $this->Paginator->numbers(['before'=>'','after'=>'']) ?>
                <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>