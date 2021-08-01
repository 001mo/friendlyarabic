var last_width = window.innerWidth,
last_height = window.innerHeight;

function footer_pusher(footer, content){
    var footer_h = parseInt(getComputedStyle(footer)['height']),
    content_h = parseInt(getComputedStyle(content)['height']),
    net_both_height = footer_h + content_h - parseInt(getComputedStyle(content)['padding-bottom']);

    if(window.innerHeight > net_both_height){
        content.style['padding-bottom'] = window.innerHeight - net_both_height + 'px';
    }


    window.onresize = function(){
        var _w = window.innerWidth,
        _h = window.innerHeight;

        if(_w == last_width && _h == last_height) return false;

        last_width = _w;
        last_height = _h;
        footer_pusher(footer, content);
    }
}
export {footer_pusher};
