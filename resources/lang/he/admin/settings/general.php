<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'תחום Active Directory',
    'ad_domain_help'			=> 'לפעמים זה זהה לדומיין הדוא"ל שלך, אך לא תמיד.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'זהו שרת Active Directory',
    'alert_email'				=> 'שלח התראות אל',
    'alerts_enabled'			=> 'התראות מופעלות',
    'alert_interval'			=> 'התראות שפג תוקפן (בימים)',
    'alert_inv_threshold'		=> 'סף התראה על מלאי',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'מזהי נכסים',
    'audit_interval'            => 'מרווח ביקורת',
    'audit_interval_help'       => 'אם אתה נדרש באופן קבוע לביקורת פיזית של הנכסים שלך, הזן את מרווח בחודשים.',
    'audit_warning_days'        => 'סף אזהרות ביקורת',
    'audit_warning_days_help'   => 'כמה ימים מראש עלינו להזהיר אותך כאשר הנכסים צפויים לביקורת?',
    'auto_increment_assets'		=> 'צור מזהי נכסים שמגדלים אוטומטית',
    'auto_increment_prefix'		=> 'קידומת (אופציונלי)',
    'auto_incrementing_help'    => 'הפעל תחילה מזהי נכס שמגדילים אוטומטית כדי להגדיר זאת',
    'backups'					=> 'גיבויים',
    'barcode_settings'			=> 'הגדרות ברקוד',
    'confirm_purge'			    => 'אשר את הטיהור',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'CSS מותאם אישית',
    'custom_css_help'			=> 'הזן כל דריסת CSS מותאמת אישית שבה תרצה להשתמש. אל תכלול את התגים &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'כתובת איפוס ססמה בהתאמה אישית',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
    'default_currency'  		=> 'מטבע ברירת מחדל',
    'default_eula_text'			=> 'ברירת מחדל ל- EULA',
    'default_language'			=> 'שפת ברירת מחדל',
    'default_eula_help_text'	=> 'ניתן גם לשייך ערכי רשיון קצה מותאמים אישית לקטגוריות ספציפיות של נכסים.',
    'display_asset_name'        => 'שם נכס לתצוגה',
    'display_checkout_date'     => 'הצג תאריך יציאה',
    'display_eol'               => 'הצג EOL בתצוגת טבלה',
    'display_qr'                => 'הצג קודי מרובע',
    'display_alt_barcode'		=> 'הצגת ברקוד 1D',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> 'סוג ברקוד דו-ממדי',
    'alt_barcode_type'			=> 'סוג 1D ברקוד',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'הגדרות EULA',
    'eula_markdown'				=> 'הסכם רשיון משתמש זה מאפשר <a href="https://help.github.com/articles/github-flavored-markdown/">Github בטעם מרקדון </a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings'			=> 'הגדרות כלליות',
    'generate_backup'			=> 'צור גיבוי',
    'header_color'              => 'צבע כותרת',
    'info'                      => 'הגדרות אלה מאפשרות לך להתאים אישית היבטים מסוימים של ההתקנה.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'גירסת Laravel',
    'ldap_enabled'              => 'LDAP מופעל',
    'ldap_integration'          => 'שילוב LDAP',
    'ldap_settings'             => 'הגדרות LDAP',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'שרת LDAP',
    'ldap_server_help'          => 'זה צריך להתחיל עם ldap: // (עבור לא מוצפן או TLS) או ldaps: // (עבור SSL)',
    'ldap_server_cert'			=> 'אימות תעודת SSL של LDAP',
    'ldap_server_cert_ignore'	=> 'אפשר אישור SSL לא חוקי',
    'ldap_server_cert_help'		=> 'בחר בתיבת סימון זו אם אתה משתמש ב- SSL עם חתימה עצמית וברצונך לקבל אישור SSL לא חוקי.',
    'ldap_tls'                  => 'השתמש ב- TLS',
    'ldap_tls_help'             => 'יש לבדוק זאת רק אם אתה מפעיל את STARTTLS בשרת LDAP שלך.',
    'ldap_uname'                => 'שם משתמש של LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'קישור סיסמה LDAP',
    'ldap_basedn'               => 'בסיס Bind DN',
    'ldap_filter'               => 'מסנן LDAP',
    'ldap_pw_sync'              => 'סינכרון סיסמת LDAP',
    'ldap_pw_sync_help'         => 'בטל את הסימון בתיבה זו אם אינך רוצה לשמור את סיסמאות LDAP המסונכרנות עם סיסמאות מקומיות. השבתה זו פירושה שהמשתמשים שלך לא יוכלו להתחבר אם שרת ה- LDAP שלך אינו ניתן להשגה מסיבה כלשהי.',
    'ldap_username_field'       => 'שם משתמש',
    'ldap_lname_field'          => 'שם משפחה',
    'ldap_fname_field'          => 'שם פרטי של LDAP',
    'ldap_auth_filter_query'    => 'שאילתת אימות LDAP',
    'ldap_version'              => 'גרסת LDAP',
    'ldap_active_flag'          => 'LDAP סמל פעיל',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'מספר עובד LDAP',
    'ldap_email'                => 'דוא"ל LDAP',
    'license'                  => 'רישיון תוכנה',
    'load_remote_text'          => 'סקריפטים מרחוק',
    'load_remote_help_text'		=> 'זה Snipe-IT להתקין יכול לטעון סקריפטים מהעולם החיצון.',
    'login_note'                => 'הערה התחברות',
    'login_note_help'           => 'אופציונלי לכלול כמה משפטים במסך הכניסה שלך, למשל כדי לעזור לאנשים שמצאו מכשיר אבוד או נגנב. השדה הזה מקבל <a href="https://help.github.com/articles/github-flavored-markdown/">Github בטעם מרקדון </a>',
    'login_remote_user_text'    => 'אפשרויות כניסת משתמש מרוחק',
    'login_remote_user_enabled_text' => 'הפעלת כניסה עם כותרת משתמש מרוחק',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'השבתת מנגנוני אימות אחרים',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'סֵמֶל',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'הגבלת משתמשים (כולל מנהלי מערכת) שהוקצו לחברות לנכסי החברה שלהם.',
    'full_multiple_companies_support_text' => 'תמיכה מלאה חברות מרובות',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'אופציונאלי',
    'per_page'                  => 'תוצאות לעמוד',
    'php'                       => 'גרסת PHP',
    'php_gd_info'               => 'עליך להתקין את PHP-gd כדי להציג קודי QR, ראה הוראות התקנה.',
    'php_gd_warning'            => 'עיבוד תמונה PHP ותוסף GD אינו מותקן.',
    'pwd_secure_complexity'     => 'מורכבות סיסמה',
    'pwd_secure_complexity_help' => 'בחר את הכללים המורכבים של סיסמאות שברצונך לאכוף.',
    'pwd_secure_min'            => 'תווים מינימליים לסיסמה',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'מנע סיסמאות נפוצות',
    'pwd_secure_uncommon_help'  => 'פעולה זו לא תאפשר למשתמשים להשתמש בסיסמאות נפוצות מתוך 10,000 הסיסמאות המובילות שדווחו על הפרות.',
    'qr_help'                   => 'הפעל תחילה קודי QR כדי להגדיר זאת',
    'qr_text'                   => 'טקסט קוד QR',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'הגדרה',
    'settings'                  => 'הגדרות',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'שם אתר',
    'slack_botname'             => 'שם בוטני',
    'slack_channel'             => 'ערוץ רפה',
    'slack_endpoint'            => 'נקודת הקצה המרוחקת',
    'slack_integration'         => 'הגדרות רפוי',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT גירסה',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'מידע מערכת',
    'update'                    => 'עדכן הגדרות',
    'value'                     => 'ערך',
    'brand'                     => 'מיתוג',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'על הגדרות',
    'about_settings_text'       => 'הגדרות אלה מאפשרות לך להתאים אישית היבטים מסוימים של ההתקנה.',
    'labels_per_page'           => 'תוויות לדף',
    'label_dimensions'          => 'מידות תווית (אינצ\'ים)',
    'next_auto_tag_base'        => 'הבא-תוספת אוטומטית',
    'page_padding'              => 'שולי דף (אינצ\'ים)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'מדיניות פרטיות',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'טיהור רשומות שנמחקו',
    'labels_display_bgutter'    => 'תווית מרזב תחתון',
    'labels_display_sgutter'    => 'תווית בצד תווית',
    'labels_fontsize'           => 'גודל גופן של תווית',
    'labels_pagewidth'          => 'רוחב גיליון תווית',
    'labels_pageheight'         => 'גובה גיליון תווית',
    'label_gutters'        => 'תווית ריווח (אינצ\'ים)',
    'page_dimensions'        => 'מידות דף (אינצ\'ים)',
    'label_fields'          => 'תייג שדות גלויים',
    'inches'        => 'אינץ',
    'width_w'        => 'w',
    'height_h'        => 'ח',
    'show_url_in_emails'                => 'קישור לצלוף- IT ב הודעות דוא"ל',
    'show_url_in_emails_help_text'      => 'בטל את הסימון בתיבה זו אם אינך רוצה לקשר חזרה את ההתקנה Snipe-IT שלך תחתונות הדוא"ל. שימושי אם רוב המשתמשים שלך לא מתחברים.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'גובה מקסימלי לתמונה ממוזערת',
    'thumbnail_max_h_help'   => 'גובה מקסימלי בפיקסלים שמוצגות תמונות ממוזערות בתצוגת הרישום. מינימום 25, מקסימום 500.',
    'two_factor'        => 'אימות שני גורמים',
    'two_factor_secret'        => 'קוד שני פקטור',
    'two_factor_enrollment'        => 'רישום שני גורמים',
    'two_factor_enabled_text'        => 'הפעל שני גורמים',
    'two_factor_reset'        => 'אפס סודי פקטור',
    'two_factor_reset_help'        => 'פעולה זו תאלץ את המשתמש לרשום שוב את המכשיר באמצעות Google Authenticator. זה יכול להיות שימושי אם המכשיר נרשם כעת אבד או נגנב.',
    'two_factor_reset_success'          => 'שני מכשיר גורם לאפס בהצלחה',
    'two_factor_reset_error'          => 'איפוס התקן שני גורמים נכשל',
    'two_factor_enabled_warning'        => 'הפעלת שני גורמים אם היא אינה מופעלת כעת תאלץ אותך מיד לבצע אימות באמצעות מכשיר רשום של Google Auth. תהיה לך אפשרות לרשום את המכשיר שלך אם אינך רשום כעת.',
    'two_factor_enabled_help'        => 'פעולה זו תפעיל אימות דו-גורמי באמצעות המאמת של Google.',
    'two_factor_optional'        => 'סלקטיבית (משתמשים יכולים להפעיל או להשבית אם מותר)',
    'two_factor_required'        => 'נדרש עבור כל המשתמשים',
    'two_factor_disabled'        => 'נָכֶה',
    'two_factor_enter_code'	=> 'הזן קוד שני פקטורים',
    'two_factor_config_complete'	=> 'שלח קוד',
    'two_factor_enabled_edit_not_allowed' => 'מנהל המערכת אינו מאפשר לך לערוך הגדרה זו.',
    'two_factor_enrollment_text'	=> "יש צורך באימות שני גורמים, אך המכשיר עדיין לא נרשם. פתח את אפליקציית המאמת של Google וסרוק את קוד QR שלהלן כדי לרשום את המכשיר שלך. לאחר שתירשם את המכשיר, הזן את הקוד הבא",
    'require_accept_signature'      => 'דרוש חתימה',
    'require_accept_signature_help_text'      => 'הפעלת תכונה זו תדרוש ממשתמשים להיכנס פיזית בעת קבלת נכס.',
    'left'        => 'שמאלה',
    'right'        => 'ימין',
    'top'        => 'חלק עליון',
    'bottom'        => 'תַחתִית',
    'vertical'        => 'אֲנָכִי',
    'horizontal'        => 'אופקי',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'אורך תגי הנכסים, כולל zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
