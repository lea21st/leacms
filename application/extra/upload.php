<?php

return [
    //上传大小限制，单位字节
    'upload_size_limit' => [
        'face'     => 524288,
        'image'    => 1048576,
        'attach'   => 524288000,
        'document' => 5242880,
        'video'    => 209715200,
        'audio'    => 5242880,
    ],
    //上传允许的文件格式
    'upload_type_limit' => [
        'face'     => 'jpg,png,jpeg',
        'image'    => 'jpg,png,gif,jpeg',
        'attach'   => 'zip,rar,tar.gz,apk',
        'document' => 'xls,xlsx,doc,docx,ppt,pptx',
        'video'    => 'mp4',
        'audio'    => 'mp3',
    ],

    //上传的位置,也可以是/home/file定义
    'upload_path'       => ROOT_PATH . '/uploads',
];