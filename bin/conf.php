;<?php http_response_code(403); /*
; config file for PrivateBin
;
; An explanation of each setting can be find online at https://github.com/PrivateBin/PrivateBin/wiki/Configuration.

[main]
name = "PrivateBin"
discussion = false
burnafterreadingselected = true
defaultformatter = "markdown"
sizelimit = 4194304
languageselection = true
qrcode = true
icon = none
zerobincompatibility = false

[expire]
default = "1day"

[expire_options]
5min = 300
10min = 600
1hour = 3600
1day = 86400
1week = 604800
; Well this is not *exactly* one month, it's 30 days:
1month = 2592000
1year = 31536000
never = 0

[formatter_options]
plaintext = "Plain Text"
syntaxhighlighting = "Source Code"
markdown = "Markdown"

[traffic]
limit = 0
dir = PATH "data"

[purge]
limit = 300
batchsize = 30
dir = PATH "data"

[model]
class = Filesystem
[model_options]
dir = PATH "data"
