<?php

use ByTIC\Icons\Icons;
use Marktic\Crm\Activities\Models\Activity;
use Marktic\Crm\Contacts\Models\Contact;

/** @var Activity[] $items */
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th><?= translator()->trans('title'); ?></th>
        <th><?= translator()->trans('summary'); ?></th>
        <th><?= translator()->trans('date'); ?></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($items) > 0) : ?>
        <?php foreach ($items as $item) : ?>
            <tr>
                <td>
                    <?= $item->getName(); ?>
                </td>
                <td><?= $item->summary; ?></td>
                <td><?= $item->on_date; ?></td>
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
