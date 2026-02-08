<?php

use ByTIC\Icons\Icons;
use Marktic\Crm\Contacts\Models\Contact;

/** @var Contact[] $items */
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th><?= translator()->trans('name'); ?></th>
        <th><?= translator()->trans('email'); ?></th>
        <th><?= translator()->trans('phone'); ?></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($items) > 0) : ?>
        <?php foreach ($items as $item) : ?>
            <tr>
                <td>
                    <?= $item->getFullName(); ?>
                    <?php if ($item->position) : ?>
                        <br/>
                        <small class="text-muted">
                            <?= $item->position; ?>
                        </small>
                    <?php endif; ?>
                </td>
                <td><?= $item->email; ?></td>
                <td><?= $item->phone; ?></td>
                <td class="text-end">
                    <a href="<?= $item->compileURL('edit'); ?>" class="btn btn-sm btn-primary">
                        <?= Icons::edit(); ?>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="4" class="text-center">
                <?= translator()->trans('no_records'); ?>
            </td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
