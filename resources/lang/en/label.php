<?php

return [
    'name' => 'Name',
    'email' => 'Email',
    'image' => 'Image',
    'expire_at' => 'Expire at',
    'username' => 'User',
    'status' => 'Status',
    'enabled' => 'Enabled',
    'disabled' => 'Disabled',
    'created_at' => 'Created at',
    'updated_at' => 'Updated at',
    'begin' => 'Begin time',
    'end' => 'End time',
    'uploaded' => 'Uploaded',
    'downloaded' => 'Downloaded',
    'ratio' => 'Share ratio',
    'seed_time_required' => 'Seed time required',
    'inspect_time_left' => 'Inspect time left',
    'added' => 'Add time',
    'last_access' => 'Last access time',
    'priority' => 'Priority',
    'priority_help' => 'The higher the value, the higher the ranking',
    'comment' => 'Comment',
    'duration' => 'Duration',
    'description' => 'Description',
    'price' => 'Price',
    'deadline' => 'Deadline',
    'permanent' => 'Permanent',
    'operator' => 'Operator',
    'action' => 'Action',
    'submit' => 'Submit',
    'cancel' => 'Cancel',
    'reset' => 'Reset',
    'anonymous' => 'Anonymous',
    'setting' => [
        'nav_text' => 'Setting',
        'backup' => [
            'tab_header' => 'Backup',
            'enabled' => 'Enabled',
            'enabled_help' => 'Enable backup or not',
            'frequency' => 'Frequency',
            'frequency_help' => 'Backup frequency',
            'hour' => 'Hour',
            'hour_help' => 'Do backup at this hour',
            'minute' => 'Minute',
            'minute_help' => "The backup is performed at the minute of the previous hour. If the frequency is pressed 'hourly', this value will be ignored",
            'google_drive_client_id' => 'Google Drive client ID',
            'google_drive_client_secret' => 'Google Drive client secret',
            'google_drive_refresh_token' => 'Google Drive refresh token',
            'google_drive_folder_id' => 'Google Drive folder ID',
            'via_ftp' => 'Backup via FTP',
            'via_ftp_help' => 'Whether to save via FTP. If so, add the configuration information to the .env file, refer to <a href="https://laravel.com/docs/master/filesystem#ftp-driver-configuration">Laravel doc</a>',
            'via_sftp' => 'Backup via SFTP',
            'via_sftp_help' => 'Whether to save via FTP. If so, add the configuration information to the .env file, refer to <a href="https://laravel.com/docs/master/filesystem#sftp-driver-configuration">Laravel doc</a>',
        ],
        'hr' => [
            'tab_header' => 'H&R',
            'mode' => 'Mode',
            'inspect_time' => 'Inspect time',
            'inspect_time_help' => 'The duration of the examination is calculated from the completion of the download, in hours',
            'seed_time_minimum' => 'Seed time minimum',
            'seed_time_minimum_help' => 'The shortest time to do the seeds to meet the standard, in hours, must be less than the length of the expedition',
            'ignore_when_ratio_reach' => 'Achievement Sharing Rate',
            'ignore_when_ratio_reach_help' => 'The minimum sharing rate to meet the standard',
            'ban_user_when_counts_reach' => 'H&R counts limit',
            'ban_user_when_counts_reach_help' => 'The number of H&R reaches this value and the account will be disabled',
        ],
        'seed_box' => [
            'tab_header' => 'SeedBox',
            'enabled_help' => 'Enable SeedBox rules or not',
            'no_promotion' => 'No promotion',
            'no_promotion_help' => 'No Promotion, uploaded/downloaded are calculated according to the actual value',
            'max_uploaded' => 'Maximum upload volume multiplier',
            'max_uploaded_help' => 'The total upload volume is at most a multiple of its volume. Set to 0 No limitation',
            'not_seed_box_max_speed' => 'Not SeedBox max upload speed',
            'not_seed_box_max_speed_help' => 'Unit: Mbps, if this value is exceeded and the SeedBox record cannot be matched, download permission is disabled',
            'max_uploaded_duration' => 'Maximum upload volume multiplier effective time range',
            'max_uploaded_duration_help' => 'Unit: hours. The maximum upload volume multiplier takes effect within this time range after the torrent is published, and does not take effect beyond this range. A setting of 0 is always in effect',
        ],
        'system' => [
            'tab_header' => 'System',
            'change_username_card_allow_characters_outside_the_alphabets' => 'Does the name change card allow characters other than English letters',
            'change_username_min_interval_in_days' => 'the minimum interval days of Change user name',
        ],
    ],
    'user' => [
        'label' => 'User',
        'uploaded' => 'Uploaded',
        'downloaded' => 'Downloaded',
        'invites' => 'Invites',
        'seedbonus' => 'Bonus',
        'attendance_card' => 'Attendance ard',
        'class' => 'Class',
        'status' => 'Status',
        'enabled' => 'Enabled',
        'username' => 'Username',
        'invite_by' => 'Inviter',
        'two_step_authentication' => 'Two-step authentication',
        'seed_points' => 'Seed points',
        'downloadpos' => 'Download privileges',
    ],
    'medal' => [
        'label' => 'Medal',
        'image_large' => 'Image large',
        'image_small' => 'Image small',
        'get_type' => 'Get type',
        'duration' => 'Duration',
        'duration_help' => 'Unit: days. If left blank, the user has permanent possession',
    ],
    'user_medal' => [
        'label' => 'User medal',
    ],
    'exam' => [
        'label' => 'Exam',
        'is_done' => 'Is done',
        'is_discovered' => 'Discovered',
        'register_time_range' => [
            'begin' => 'Register time begin',
            'end' => 'Register time end',
        ],
        'donated' => 'Donated',
        'index_formatted' => 'Exam indexes',
        'filter_formatted' => 'Target users',
        'section_base_info' => 'Base info',
        'priority_help' => 'The higher the value, the higher the priority, and when multiple exam match the same user, the one with the highest priority is assigned.',
        'section_time' => 'Time',
        'duration_help' => 'Unit: days. When assign to user, begin and end are used if they are specified. Otherwise begin time is the time at assignment, and the end time is the time at assignment plus the duration.',
        'section_target_user' => 'Target user',
        'index_required_value' => 'Require value',
        'index_required_label' => 'Index',
        'index_placeholder' => 'Upload/Download increment in GB and seed time average in hour',
        'index_current_value' => 'Current value',
        'index_result' => 'Result',
    ],
    'exam_user' => [
        'label' => 'Exam user',
        'is_done' => 'Is done',
    ],
    'torrent' => [
        'label' => 'Torrent',
        'owner' => 'Owner',
        'size' => 'Size',
        'ttl' => 'TTL',
        'seeders' => 'Seeders',
        'leechers' => 'Leechers',
        'times_completed' => 'Complete',
        'category' => 'Category',
        'approval_status' => 'Approval status',
        'pos_state' => 'Pos state',
        'sp_state' => 'Promotion',
        'visible' => 'Active',
        'source' => 'Source',
        'codec' => 'Codec',
        'audiocodec' => 'Audio codec',
        'medium' => 'Medium',
        'team' => 'Team',
        'processing' => 'Processing',
        'standard' => 'Standard',
        'picktype' => 'Recommend',
        'promotion_time_type' => 'Promotion type time',
        'hr' => 'H&R',
    ],
    'hit_and_run' => [
        'label' => 'User H&R',
    ],
    'tag' => [
        'label' => 'Tag',
        'color' => 'Background color',
        'font_color' => 'Font color',
        'font_size' => 'Font size',
        'margin' => 'Margin',
        'padding' => 'Padding',
        'border_radius' => 'Border radius',
        'torrents_count' => 'Torrents count',
    ],
    'agent_allow' => [
        'label' => 'Agent allow',
        'family' => 'Family',
        'start_name' => 'Start name',
        'peer_id_start' => 'Peer ID start',
        'peer_id_pattern' => 'Peer ID pattern',
        'peer_id_matchtype' => 'Peer ID match type',
        'peer_id_match_num' => 'Peer ID match num',
        'agent_start' => 'Agent start',
        'agent_pattern' => 'Agent pattern',
        'agent_matchtype' => 'Agent match type',
        'agent_match_num' => 'Agent match num',
        'exception' => 'Exception',
        'allowhttps' => 'Allow https',
    ],
    'agent_deny' => [
        'label' => 'Agent deny',
        'peer_id' => 'Peer ID',
        'agent' => 'Agent',
    ],
    'claim' => [
        'label' => 'User claim',
        'last_settle_at' => 'Last settle at',
        'seed_time_this_month' => 'St. this month',
        'uploaded_this_month' => 'Up. this month',
        'is_reached_this_month' => 'Reached',
    ],
    'torrent_state' => [
        'label' => 'Global promotion',
        'global_sp_state' => 'Global promotion state',
    ],
    'role' => [
        'class' => 'Relate user class',
    ],
    'seed_box_record' => [
        'label' => 'SeedBox Records',
        'type' => 'Add type',
        'operator' => 'Operator',
        'bandwidth' => 'Bandwidth(Mbps)',
        'ip' => 'IP(Block)',
        'ip_begin' => 'Begin IP',
        'ip_end' => 'End IP',
        'ip_help' => 'Fill in the begin IP + end IP, or IP (Block), not both',
        'status' => 'Status',
    ],
    'menu' => [
        'label' => 'Custom menu',
        'enable_help' => 'Whether to enable custom menu',
    ],
    'menu_item' => [
        'label' => 'Menu items',
        'url' => 'Link',
        'text' => 'Text',
        'target' => 'Open type',
        'style' => 'Style',
        'parent_id' => 'Parent',
        'min_class' => 'Minimum visible class',
    ],
    'user_meta' => [
        'meta_keys' => [
            \App\Models\UserMeta::META_KEY_CHANGE_USERNAME => 'Name Change Card',
            \App\Models\UserMeta::META_KEY_PERSONALIZED_USERNAME => 'Rainbow ID',
        ],
    ],
    'search_box' => [
        'label' => 'Search box',
        'name' => 'SearchBox Name',
        'name_help' => 'Allowed Characters: [a-z] (in lower case), [0-9], [_./].',
        'section_name' => 'Section name',
        'section_name_help' => 'If set, displayed on the menu',
        'is_default' => 'Default or not',
        'showsubcat' => 'Show sub-category',
        'taxonomies' => 'Taxonomy',
        'taxonomy_display_text' => 'Display text',
        'torrent_field' => 'Torrents table field',
        'catsperrow' => 'Items per row',
        'catsperrow_help' => "Set how many items should show in a row in searchbox, e.g. '8'.",
        'catpadding' => "Padding between items",
        'catpadding_help' => "In pixels. The horizional padding space between items in searchbox, e.g. '3'.",
        'custom_fields' => 'Enable custom field	',
        'custom_fields_display_name' => 'Custom field display name',
        'custom_fields_display' => 'Custom field display',
        'custom_fields_display_help' => "Use 'specific label' to represent custom field's label and value，such as one custom field's name is 'artist'，
then it's label：<%artist.label%>，it's value：<%artist.value%>",
        'category' => 'Category',
        'torrent_field_duplicate' => 'Torrent table field::field cannot be reused!',
        'other' => 'Other',
        'taxonomy' => [
            'name' => 'Name',
            'sort_index' => 'Sort',
            'sort_index_help' => "Ascendantly, i.e. '0' comes first.",
            'class_name' => 'class attribute',
            'class_name_help' => "The name of image file. Allowed Characters: [a-z] (in lower case), [0-9], [_./].",
            'image' => 'Image',
            'image_help' => 'The name of image file. Allowed Characters: [a-z] (in lower case), [0-9], [_./].',
            'icon_id' => 'Category icon pack',
            'mode' => 'SearchBox',
            'mode_help' => 'Leave blank to indicate that it applies to all SearchBox',
        ],
    ],
    'icon' => [
        'label' => 'Category icon',
        'folder' => 'Icon Pack Folder',
        'folder_help' => "The folder name of the icon pack. Allowed Characters: [a-z] (in lower case), [0-9], [_./].MUST add a trailing slash (/) at the end, e.g. 'mycaticon/'",
        'cssfile' => 'CSS file',
        'cssfile_help' => "CSS file for this icon pack. Enter the full path, e.g. 'styles/scenetorrents.css'. Leave it blank if none.
Allowed Characters: [a-z] (in lower case), [0-9], [_./].",
        'multilang' => 'Multi-lang.',
        'multilang_help' => "Whether use different category icons for different languages. If set to 'yes', put several packs of icons in several folders named 'en', 'chs', etc.",
        'secondicon' => 'Second Icon',
        'secondicon_help' => "Whether use second icons for additional information. If set to 'yes', put second icons in a folder named 'additional' together with normal icons.",
        'designer' => 'Designer',
        'designer_help' => 'The person who designed the icon pack.',
        'comment' => 'Comment',
        'comment_help' => ' Infomation about the icon pack.',
        'desc' => "You need to put the icons in the right directory for these settings to work. Put the normal icons in 'pic/category/searchbox_name/icon_pack_folder[language_short_name/]' and the second icons in 'pic/category/searchbox_name/icon_pack_folder[language_short_name/]additional/'.
Don't get it? See if the following examples could help:
When
    searchbox_name='nhd'
    icon_pack_folder='scenetorrents/'
    multi-lang='yes'
    second_icon='no'
you should put an English normal icon file for movies (e.g. 'movies.png') in 'pic/category/nhd/scenetorrents/en/' .
When
    searchbox_name='chd'
    icon_pack_folder='nanosofts/'
    multi-lang='no'
    second_icon='yes'
you should put a normal icon file for movies (e.g. movies.png) in 'pic/category/chd/nanosofts/' and an additional icon file (e.g. 'bdh264.png') in 'pic/category/chd/nanosofts/additional/'.",
    ],
    'second_icon' => [
        'label' => 'Second icon',
        'name' => 'Name',
        'name_help' => "Don't use long name. Recommend less than 10 letters.",
        'image' => "Image",
        'image_help' => "The name of image file. Allowed Characters: [a-z] (in lower case), [0-9], [_./].",
        'class_name' => 'class attribute',
        'class_name_help' => "The value of 'class' attribute of the image. Leave it blank if none. Allowed Characters: [a-z] (in lower case), [0-9], [_], and the first letter must be in [a-z].",
        'select_section' => 'Selections',
        'select_section_help' => "If a selection is not defined, all options from the selection are allowed for the rule. At least one selection should be defined.",
    ],
];
