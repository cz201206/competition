<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css" />
    <title>健康信息管理</title>
</head>
<body>

<!--cz_amazeui_html-->
<div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
    <ul class="am-slides">
        <li><img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" /></li>
        <li><img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" /></li>
    </ul>
</div>

<div class="am-btn-toolbar">
    <button type="button" class="am-btn am-btn-primary js-demo-slider-btn" data-action="add">添加 slide</button>
    <button type="button" class="am-btn am-btn-danger js-demo-slider-btn" data-action="remove">移除 slide</button>
</div>


<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>
<script type="text/javascript" src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.ie8polyfill.min.js"></script>
<script type="text/javascript" src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.widgets.helper.min.js"></script>

<!--cz_amazeui_script-->
<script>
    $(function() {
        var $slider = $('#demo-slider-0');
        var counter = 0;
        var getSlide = function() {
            counter++;
            return '<li><img src="http://s.amazeui.org/media/i/demos/bing-' +
                (Math.floor(Math.random() * 4) + 1) + '.jpg" />' +
                '<div class="am-slider-desc">动态插入的 slide ' + counter + '</div></li>';
        };

        $('.js-demo-slider-btn').on('click', function() {
            var action = this.getAttribute('data-action');
            if (action === 'add') {
                $slider.flexslider('addSlide', getSlide());
            } else {
                var count = $slider.flexslider('count');
                count > 1 && $slider.flexslider('removeSlide', $slider.flexslider('count') - 1);
            }
        });

    });
</script>

</body>
</html>
