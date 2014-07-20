<?php


namespace Apps\UEditor\Helper;

class Config {
    /* 上传图片配置项 */
    public $imageActionName = "uploadimage"; /* 执行上传图片的action名称 */
    public $imageFieldName = "upfile"; /* 提交的图片表单名称 */
    public $imageMaxSize = 2048000; /* 上传大小限制，单位B */
    public $imageAllowFiles= array(".png", ".jpg", ".jpeg", ".gif", ".bmp"); /* 上传图片格式显示 */
    public $imageCompressEnable=true; /* 是否压缩图片,默认是true */
    public $imageCompressBorder=1600; /* 图片压缩最长边限制 */
    public $imageInsertAlign="none"; /* 插入的图片浮动方式 */
    public $imageUrlPrefix=""; /* 图片访问路径前缀 */
    public $imagePathFormat="/h1soft/h/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}"; 
            /* 上传保存路径,可以自定义保存路径和文件名格式 */
                                /* {filename} 会替换成原文件名,配置这项需要注意中文乱码问题 */
                                /* {rand:6} 会替换成随机数,后面的数字是随机数的位数 */
                                /* {time} 会替换成时间戳 */
                                /* {yyyy} 会替换成四位年份 */
                                /* {yy} 会替换成两位年份 */
                                /* {mm} 会替换成两位月份 */
                                /* {dd} 会替换成两位日期 */
                                /* {hh} 会替换成两位小时 */
                                /* {ii} 会替换成两位分钟 */
                                /* {ss} 会替换成两位秒 */
                                /* 非法字符 \ : * ? " < > | */
                                /* 具请体看线上文档: fex.baidu.com/ueditor/#use-format_upload_filename */

    /* 涂鸦图片上传配置项 */
    public $scrawlActionName="uploadscrawl"; /* 执行上传涂鸦的action名称 */
    public $scrawlFieldName="upfile"; /* 提交的图片表单名称 */
    public $scrawlPathFormat="upload/image/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
    public $scrawlMaxSize=2048000; /* 上传大小限制，单位B */
    public $scrawlUrlPrefix=""; /* 图片访问路径前缀 */
    public $scrawlInsertAlign="none";

    /* 截图工具上传 */
    public $snapscreenActionName="uploadimage"; /* 执行上传截图的action名称 */
    public $snapscreenPathFormat="upload/image/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
    public $snapscreenUrlPrefix=""; /* 图片访问路径前缀 */
    public $snapscreenInsertAlign="none"; /* 插入的图片浮动方式 */

    /* 抓取远程图片配置 */
    public $catcherLocalDomain=array("127.0.0.1", "localhost", "img.baidu.com");
    public $catcherActionName="catchimage"; /* 执行抓取远程图片的action名称 */
    public $catcherFieldName="source"; /* 提交的图片列表表单名称 */
    public $catcherPathFormat="upload/image/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
    public $catcherUrlPrefix=""; /* 图片访问路径前缀 */
    public $catcherMaxSize=2048000; /* 上传大小限制，单位B */
    public $catcherAllowFiles = array(".png", ".jpg", ".jpeg", ".gif", ".bmp"); /* 抓取图片格式显示 */

    /* 上传视频配置 */
    public $videoActionName="uploadvideo"; /* 执行上传视频的action名称 */
    public $videoFieldName="upfile"; /* 提交的视频表单名称 */
    public $videoPathFormat="upload/video/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
    public $videoUrlPrefix=""; /* 视频访问路径前缀 */
    public $videoMaxSize=102400000; /* 上传大小限制，单位B，默认100MB */
    public $videoAllowFiles=array(
        ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
        ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid"); /* 上传视频格式显示 */

    /* 上传文件配置 */
    public $fileActionName="uploadfile"; /* controller里,执行上传视频的action名称 */
    public $fileFieldName="upfile"; /* 提交的文件表单名称 */
    public $filePathFormat="upload/file/{yyyy}{mm}{dd}/{time}{rand:6}"; /* 上传保存路径,可以自定义保存路径和文件名格式 */
    public $fileUrlPrefix=""; /* 文件访问路径前缀 */
    public $fileMaxSize=51200000; /* 上传大小限制，单位B，默认50MB */
    public $fileAllowFiles=array(
        ".png", ".jpg", ".jpeg", ".gif", ".bmp",
        ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
        ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
        ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
        ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml"
    ); /* 上传文件格式显示 */

    /* 列出指定目录下的图片 */
    public $imageManagerActionName="listimage"; /* 执行图片管理的action名称 */
    public $imageManagerListPath="upload/image/"; /* 指定要列出图片的目录 */
    public $imageManagerListSize=20; /* 每次列出文件数量 */
    public $imageManagerUrlPrefix=""; /* 图片访问路径前缀 */
    public $imageManagerInsertAlign="none"; /* 插入的图片浮动方式 */
    public $imageManagerAllowFiles=array(".png", ".jpg", ".jpeg", ".gif", ".bmp"); /* 列出的文件类型 */

    /* 列出指定目录下的文件 */
    public $fileManagerActionName="listfile"; /* 执行文件管理的action名称 */
    public $fileManagerListPath="upload/file/"; /* 指定要列出文件的目录 */
    public $fileManagerUrlPrefix=""; /* 文件访问路径前缀 */
    public $fileManagerListSize=20; /* 每次列出文件数量 */
    public $fileManagerAllowFiles=array(
        ".png", ".jpg", ".jpeg", ".gif", ".bmp",
        ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
        ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
        ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
        ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml"
    ) ;
    /* 列出的文件类型 */
}