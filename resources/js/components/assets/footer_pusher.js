var last_width = window.innerWidth;

function footer_pusher(footer, content_section){
    var footer_h = getComputedStyle(footer).height,
    content_h = getComputedStyle(content_section).height;

    if(window.innerHeight > parseInt(content_h) + parseInt(footer_h)){
        content_section.style.setProperty('height', `calc(100vh - ${footer_h})`);
    }
    else{
        content_section.style.setProperty('height', `unset`);
    }

    window.onresize = function(){
        var _width = window.innerWidth;
        if(_width == last_width) return false;

        footer_pusher(footer, content_section);
        last_width = _width;
    }
}
export {footer_pusher};
