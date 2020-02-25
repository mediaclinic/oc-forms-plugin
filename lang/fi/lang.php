<?php return [
    'plugin' => [
        'name' => 'Kustomoitava lomake',
        'description' => '',
    ],
    'tabs' => [
        'fields' => 'Kentät',
        'privacy' => 'Yksityisyys',
        'antispam' => 'Antispam',
        'styling' => 'Muotoilu',
        'emailing' => 'Lähetykset',
        'caching' => 'Caching',
        'action' => 'Toiminto',
        'validation' => 'Validointi',
        'options' => 'Optiot',
        'html_attributes' => 'HTML-attribuutit',
    ],
    'sections' => [
        'buttons' => [
            'label' => 'Nappulan tyyli',
        ],
        'recaptcha' => [
            'label' => 'Google ReCAPTCHA',
        ],
        'ip_restriction' => [
            'label' => 'IP-rajoitukset',
        ],
        'auto_reply' => [
            'label' => 'Autom. vastaukset',
        ],
        'styling' => [
            'label' => 'Lomakemuotoilut',
            'comment' => 'All of the below can be overridden, per form and/or field',
        ],
        'validation' => [
            'label' => 'Validoinnin muotoilut',
            'comment' => 'All of the below can be overridden, per form'
        ],
        'notifications' => [
            'label' => 'Automaattiset huomautukset',
        ],
    ],
    'forms' => [
        'field' => [
            'title' => 'Otsikko',
            'code' => 'Koodi',
        ],
    ],
    'mail' => [
        'templates' => [
            'autoreply' => 'Kustomoitava lomake - Automaattisen vastauksen viesti',
            'notification' => 'Kustomoitava lomake - Notifikaatioviesti',
        ]
    ],
    'customForm' => [
        'formCode' => [
            'title' => 'Käytä lomaketta',
            'description' => 'Define the form to use by its code',
        ],
        'validation' => [
            'recaptchaFailed' => 'Sinun on täytettävä reCAPTCHA-tarkastus',
            'noData' => 'No data supplied',
            'invalidNotificationRecipients' => 'Notification recipients list contains invalid email address',
            'noAutoReplyEmailField' => 'Automaattisen vastauksen sähköpostia ei löytynyt',
            'noAutoReplyNameField' => 'Automaattisen vastauksen nimikenttää ei löytynyt',
        ]
    ],
    'models' => [
        'all' => [
            'created_at' => [
                'label' => 'Luotu',
            ],
            'updated_at' => [
                'label' => 'Päivitetty',
            ],
            'sort_order' => [
                'label' => 'Näyttöjärjestys',
            ],
            'override' => [
                'label' => 'Yliaja järjestelmän oletus',
                'comment' => 'On: Yliaja | Off: Periytä'
            ],
        ],
        'settings' => [
            'enable_caching' => [
                'label' => 'Aktivoi Caching',
                'comment' => 'Choose whether or not cache the rendered form'
            ],
            'cache_lifetime' => [
                'label' => 'Cache-elinikä',
                'comment' => 'Amount of minutes to cache the rendered form for'
            ],
            'form_class' => [
                'label' => 'Form-luokka',
                'comment' => 'CSS Class for the Form',
            ],
            'field_class' => [
                'label' => 'Field-luokka',
                'comment' => 'CSS Class for the Field',
            ],
            'row_class' => [
                'label' => 'Row-luokka',
                'comment' => 'CSS Class for the Row',
            ],
            'group_class' => [
                'label' => 'Group-luokka',
                'comment' => 'CSS Class for the Group',
            ],
            'label_class' => [
                'label' => 'Label-luokka',
                'comment' => 'CSS Class for the Label',
            ],
            'submit_class' => [
                'label' => 'Submit-luokka',
                'comment' => 'CSS Class of the submit button',
            ],
            'submit_text' => [
                'label' => 'Submit teksti',
                'comment' => 'Text to display in the submit button',
            ],
            'enable_cancel' => [
                'label' => 'Aktivoi Peruuta',
                'comment' => 'Will go back to referer if clicked',
            ],
            'cancel_class' => [
                'label' => 'Cancel-luokka',
                'comment' => 'CSS Class of the cancel button (if enabled)',
            ],
            'cancel_text' => [
                'label' => 'Cancel-teksti',
                'comment' => 'Text to display in the cancel button (if enabled)',
            ],
            'saves_data' => [
                'label' => 'Tallenna data?',
                'comment' => 'Choose whether or not to save submission data to the database (recommended)',
            ],
            'store_ips' => [
                'label' => 'Tallenna IP-osoite?',
                'comment' => 'Choose whether or not to store IP addresses along with submissions',
            ],
            'enable_recaptcha' => [
                'label' => 'Aktivoi Recpatcha',
                'comment' => 'Should this Form require recpatcha?',
            ],
            'recaptcha_public_key' => [
                'label' => 'ReCAPTCHA Public Key',
                'comment' => 'Google ReCAPTCHA (Public) API Key',
            ],
            'recaptcha_secret_key' => [
                'label' => 'ReCAPTCHA Secret Key',
                'comment' => 'Google ReCAPTCHA (Private) API Key',
            ],
            'enable_ip_restriction' => [
                'label' => 'Enable IP Restriction',
                'comment' => 'Choose to enable an IP restriction for this form',
            ],
            'max_requests_per_day' => [
                'label' => 'Max Requests Per Day',
                'comment' => 'Maximum amount of daily submissions',
            ],
            'throttle_message' => [
                'label' => 'Throttle Message',
                'comment' => 'Choose what to display to a user who has exceeded their daily submissions',
            ],
            'queue_emails' => [
                'label' => 'Queue Emails?',
                'comment' => 'Choose whether or not to add emails to the queue rather than sending synchronously (recommened)'
            ],
            'send_notifications' => [
                'label' => 'Send Notifications',
                'comment' => 'Decide if you would like to receive notifications for each submission. Can be overridden, per form',
            ],
            'notification_template' => [
                'label' => 'Notification Template',
                'comment' => 'Custom email template code (Settings > Email templates)',
            ],
            'notification_recipients' => [
                'label' => 'Notification Recipients',
                'comment' => 'Comma separated email addresses',
            ],
            'auto_reply' => [
                'label' => 'Automaattinen vastaus?',
                'comment' => 'Send automated reply to user who submits this form. Fields must be configured, per form',
            ],
            'auto_reply_email_field_id' => [
                'label' => 'Auto Reply Email Field',
                'comment' => 'Select the field to use as the email address to auto reply to',
            ],
            'auto_reply_name_field_id' => [
                'label' => 'Auto Reply Name Field',
                'comment' => 'Select the field to use as the name when auto replying',
            ],
            'auto_reply_template' => [
                'label' => 'Auto Reply Template',
                'comment' => 'Custom email template code (Settings > Email templates)',
            ],
            'field_error_class' => [
                'label' => 'Field Error Class',
                'comment' => 'CSS Class to apply to a field on error',
            ],
            'field_success_class' => [
                'label' => 'Field Success Class',
                'comment' => 'CSS Class to apply to a field on success',
            ],
            'label_error_class' => [
                'label' => 'Label Error Class',
                'comment' => 'CSS Class to apply to a label on error',
            ],
            'label_success_class' => [
                'label' => 'Label Success Class',
                'comment' => 'CSS Class to apply to a label on success',
            ],
            'form_error_class' => [
                'label' => 'Form Error Class',
                'comment' => 'CSS Class to apply to a form on error',
            ],
            'form_success_class' => [
                'label' => 'Form Success Class',
                'comment' => 'CSS Class to apply to a form on success',
            ],
            'on_success' => [
                'label' => 'On Success Action',
                'comment' => 'Choose what to do when the form is successfully submitted',
                'options' => [
                    'hide' => 'Hide form',
                    'clear' => 'Clear/reset the form',
                    'redirect' => 'Redirect to URL'
                ],
            ],
            'on_success_message' => [
                'label' => 'On Success Message',
                'comment' => 'Choose what to flash when the form is successfully submitted',
                'placeholder' => 'Message successfully sent'
            ],
            'on_success_redirect' => [
                'label' => 'On Success Redirect',
                'comment' => 'Choose what URL to redirect to when the form is successfully submitted',
                'placeholder' => '/thank-you'
            ]
        ],
        'form' => [
            'title' => [
                'label' => 'Form Title',
                'comment' => 'The title of the form (display in email, etc)'
            ],
            'code' => [
                'label' => 'Form Code',
                'comment' => 'The form\'s code (snake_case only)'
            ],
            'description' => [
                'label' => 'Form Description',
                'comment' => 'A little description about the forms purpose'
            ],
        ],
        'field' => [
            'name' => [
                'label' => 'Name',
                'comment' => 'Used as the label for this field',
            ],
            'code' => [
                'label' => 'Code',
                'comment' => 'Used to identify this field. Must be in snake_case',
            ],
            'type' => [
                'label' => 'Type',
                'comment' => 'Choose the type of field',
            ],
            'description' => [
                'label' => 'Description',
                'comment' => 'Optional. A description of this field',
            ],
            'placeholder' => [
                'label' => 'Placeholder',
                'comment' => 'Enter the placeholder attribute value here. For select elements, it acts as an option.',
            ],
            'default' => [
                'label' => 'Default',
                'comment' => 'The default value. For select/radio/checkboxes use the code of the option.',
            ],
            'show_description' => [
                'label' => 'Show Description',
                'comment' => 'Show the description in the form under the field\'s label?',
            ],
            'required' => [
                'label' => 'Required',
                'comment' => 'Synonymous for adding the "required" validation rule',
            ],
            'validation_rules' => [
                'label' => 'Validation Rules',
                'comment' => 'See documentation for more info: https://octobercms.com/docs/services/validation#available-validation-rules',
            ],
            'validation_message' => [
                'label' => 'Validation Message',
                'comment' => 'What message should be shown on failure',
            ],
            'options' => [
                'label' => 'Options',
                'comment' => 'Add your select, radio or checkbox options here',
                'prompt' => 'Add an option',
                'fields' => [
                    'option_label' => [
                        'label' => 'Option Label',
                        'comment' => 'Used as the label for this option'
                    ],
                    'option_code' => [
                        'label' => 'Option Code',
                        'comment' => 'Used to identify this field. Must be in snake_case'
                    ],
                    'is_optgroup' => [
                        'label' => 'Add sub options?',
                        'comment' => 'Adding sub options will turn this option into a group of options (specifically an `<optgroup>`)'
                    ],
                    'options' => [
                        'label' => 'Sub Options',
                        'comment' => 'Add sub options to this option group',
                        'fields' => [
                            'option_label' => [
                                'label' => 'Option Label',
                                'comment' => 'Used as the label for this option'
                            ],
                            'option_code' => [
                                'label' => 'Option Code',
                                'comment' => 'Used to identify this field. Must be in snake_case'
                            ]
                        ]
                    ],
                ]
            ],
            'html_attributes' => [
                'label' => 'HTML-attribuutit',
                'comment' => 'Add/override custom attributes for the field (input, select, textarea).',
                'prompt' => 'Add an attribute',
                'fields' => [
                    'attribute_name' => [
                        'label' => 'Attribuutin nimi',
                        'comment' => 'Esim. data-id, title, class, jne.',
                    ],
                    'attribute_value' => [
                        'label' => 'Attribute Value',
                        'comment' => 'The value of the attribute. For boolean attributes, leave blank.',
                    ],
                ]
            ],
            'show_in_email_autoreply' => [
                'label' => 'Show in autoreply emails',
                'comment' => 'Should this field\'s value show in the autoreply emails',
            ],
            'show_in_email_notification' => [
                'label' => 'Show in notification emails',
                'comment' => 'Should this field\'s value show in notification emails',
            ],
        ]
    ]
];
