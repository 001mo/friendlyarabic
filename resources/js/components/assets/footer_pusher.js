var last_width = window.innerWidth,
last_height = window.innerHeight;

function footer_pusher(footer, content_section){
    var footer_h = getComputedStyle(footer).height,
    content_h = getComputedStyle(content_section).height;

    if(window.innerHeight > parseInt(content_h) + parseInt(footer_h)){
        content_section.style.height = (window.innerHeight - parseInt(footer_h))+'px';
    }
    else{
        content_section.style.height = 'unset';
    }


    window.onresize = function(){
        var _w = window.innerWidth,
        _h = window.innerHeight;

        if(_w == last_width && _h == last_height) return false;

        last_width = _w;
        last_height = _h;
        footer_pusher(footer, content_section);
    }
}
export {footer_pusher};
