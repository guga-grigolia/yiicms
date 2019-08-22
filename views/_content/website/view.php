<?php

/**
 * @var $this  yii\web\View
 * @var $model intermundia\yiicms\models\Website
 * @var $contentTreeModel \intermundia\yiicms\models\ContentTree
 */

?>
<?php echo $this->render('../content-tree/_model_fields_view', [
    'contentTreeModel' => $contentTreeModel,
]); ?>
<?php echo \common\widgets\DetailView::widget([
    'model' => $model,
    'attributes' => [
        'activeTranslation.title',
        'activeTranslation.short_description',
        'activeTranslation.logo_image_name',
        'activeTranslation.name',
        'activeTranslation.og_site_name',
        'activeTranslation.cookie_disclaimer_message',
        'activeTranslation.copyright',
//        [
//            'label' => 'Og Image',
//            'attribute' => 'activeTranslation.og_image',
//            'format' => 'thumbnail',
//        ],
//        [
//            'label' => 'Logo Image',
//            'attribute' => 'activeTranslation.logo_image',
//            'format' => 'thumbnail',
//        ],
//        [
//            'label' => 'Claim Image',
//            'attribute' => 'activeTranslation.claim_image',
//            'format' => 'thumbnail',
//        ],
        'activeTranslation.google_tag_manager_code',
        'activeTranslation.html_code_before_close_body',
        'created_at:datetime', // creation date formatted as datetime
//        'activeTranslation.address_of_company',
        'activeTranslation.footer_name',
        'activeTranslation.footer_headline',
        'activeTranslation.footer_plain_text',
        'activeTranslation.footer_copyright',
        'activeTranslation.footer_logo',
        //Corporate Data info
        'company_name',
        'company_country',
        'company_city',
        'company_street_address',
        'company_postal_code',
        'location_latitude',
        'location_longitude',
        'company_contact_type',
        'company_telephone',
        [
            'attribute' => 'social_links',
            'value' => function($model) {
                $social_links = '';
                if($model->company_social_links) {
                    foreach($model->company_social_links as $social_link) {
                        $social_links .= "<p>${social_link}</p>";
                    }
                }

                return $social_links;
            },
            'format' => 'html'
        ],
    ],
]);


?>



