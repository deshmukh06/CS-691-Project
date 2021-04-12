<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRole[]|\Cake\Collection\CollectionInterface $userRoles
 */
?>
<div class="userRoles index content">
    <?= $this->Html->link(__('New User Role'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Roles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('updated_by') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('deleted_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userRoles as $userRole): ?>
                <tr>
                    <td><?= $this->Number->format($userRole->id) ?></td>
                    <td><?= h($userRole->title) ?></td>
                    <td><?= h($userRole->status) ?></td>
                    <td><?= $this->Number->format($userRole->created_by) ?></td>
                    <td><?= $this->Number->format($userRole->updated_by) ?></td>
                    <td><?= h($userRole->created_at) ?></td>
                    <td><?= h($userRole->updated_at) ?></td>
                    <td><?= h($userRole->deleted_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userRole->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRole->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRole->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
