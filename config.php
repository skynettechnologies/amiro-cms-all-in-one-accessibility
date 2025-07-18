;<? /* !!! DO NOT REMOVE THIS LINE !!! */ die(); ?>

; unique plugin ID (alphanumeric in lower case and underscore)
id = all_in_one_accessibility

; current plugin version in format XX.YY
version = 1.03

; new api usage
api_version = 6.00

; specblock/admin file name (at least one of them should be specified)
admin     = all_in_one_accessibility_mapping.php
specblock = all_in_one_accessibility_specblock.php

; sql install file
sql_install = install.sql

; sql uninstall file
sql_uninstall = uninstall.sql

; icon that will be displayed on start page (optional)
icon = icon_sample.gif

; list of allowed modules where plugin will be installed to (it is required for now, later it will be optional)
; install_as module will be a real module later - system just checks for such module existence
; module links are considered as NOT installed for now
install_as = plugins::all_in_one_accessibility
