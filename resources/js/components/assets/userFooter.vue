<template>
    <div class="container-fluid py-5 px-4 user_footer" ref="footer">
        <div class="row no-gutters justify-content-center justify-content-md-start">
            <div class="col-12 text-center text-md-left col-md-4 terms">
                <ul class="m-md-0 list-unstyled">
                    <li><a href="" v-html="'Terms and Conditions'"></a></li>
                    <li><a href="" v-html="'Privacy Policy'"></a></li>
                </ul>
            </div>
            <div class="col-12 text-center col-md-4 pt-2 pt-md-0 icons">
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
    props: {
        push: {
            type: Boolean,
            default: false
        }
    },
    methods: {
        footer_pusher: function(content_wrapper = this.$parent.$refs.content_wrapper){
            if(!content_wrapper) return false;
            footer_pusher(this.$refs.footer, content_wrapper)
        }
    },
    mounted(){
        if(this.push){this.footer_pusher();}
    }
}
</script>
