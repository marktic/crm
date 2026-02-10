<?php

use ByTIC\AdminBase\Screen\Actions\Dto\ButtonAction;
use ByTIC\AdminBase\Widgets\Cards\Card;
use ByTIC\Icons\Icons;
use Marktic\Crm\Utility\CrmModels;

$repository = CrmModels::contacts();
$crmContact = $crmContact ?? $this->crmContact;
$card = Card::make()
    ->withTitle($repository->getLabel('title'))
//    ->withIcon(Icons::address_card())
    ->addHeaderTool(
        ButtonAction::make()
            ->setLabel($repository->getLabel('add'))
            ->setUrl($repository->compileURL('add', [
                'subject_id' => $crmContact->id,
                'subject_type' => $crmContact->getManager()->getMorphName(),
            ]))
            ->addHtmlClass('btn-xs')
    )
    ->withView($this)
    ->wrapBody(false)
    ->withViewContent('/mkt_crm-contacts/modules/lists/subject', [
        'items' => $this->crm_contacts,
        'subject' => $crmContact,
    ]);
?>
<?= $card; ?>
