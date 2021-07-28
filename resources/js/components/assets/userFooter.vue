<template>
    <div class="container-fluid user_footer py-5 px-4" ref="footer">
        <div class="row justify-content-center no-gutters d-md-block">
            <div class="d-md-inline-block w-auto terms">
                <ul class="m-md-0 list-unstyled">
                    <li><a href="" v-html="'Terms and Conditions'"></a></li>
                    <li><a href="" v-html="'Privacy Policy'"></a></li>
                </ul>
            </div>
            <div class="d-md-inline-block w-auto icons">
                <ul class="m-md-0 list-unstyled">
                    <li><a href=""><facebook></facebook></a></li>
                    <li><a href=""><twitter></twitter></a></li>
                    <li><a href=""><youtube></youtube></a></li>
                    <li><a href=""><instagram></instagram></a></li>
                    <li><a href=""><linkedin></linkedin></a></li>
                    <li><a href=""><pinterest></pinterest></a></li>
                    <li><a href=""><quora></quora></a></li>
                    <li><a href=""><m></m></a></li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
import Facebook from './icons/logos/facebookLogo.vue';
import twitter from './icons/logos/twitterLogo.vue';
import youtube from './icons/logos/youtubeLogo.vue';
import instagram from './icons/logos/instagramLogo.vue';
import linkedin from './icons/logos/linkedinLogo.vue';
import pinterest from './icons/logos/pinterestLogo.vue';
import quora from './icons/logos/quoraLogo.vue';
import m from './icons/logos/mLogo.vue';

import {footer_pusher} from './footer_pusher.js';

export default {
    components: {
        Facebook,
        twitter,
        youtube,
        instagram,
        linkedin,
        pinterest,
        quora,
        m
    },
    methods: {
        pusher: function(){
            var container = this.$refs.footer,
            _0 = container.children[0].children[0],
            _1 = container.children[0].children[1],
            middle_point = (parseInt(getComputedStyle(container).width) /2) - (parseInt(getComputedStyle(_1).width) /2) - (parseInt(getComputedStyle(container).paddingLeft)),
            margin = middle_point - parseInt(getComputedStyle(_0).width);

            _1.style['margin-left'] = margin > 0 ? margin+'px' : 'unset';

            window.addEventListener('resize', this.pusher);
        },

        footer_pusher: function(content_section){ footer_pusher(this.$refs.footer, content_section); }
    },
    mounted: function(){
        this.pusher();
    }
}
</script>
