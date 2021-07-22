<template>
    <div class="container-fluid userFooter py-5 px-4" ref="row">
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
            var container = this.$refs.row,
            _0 = container.children[0].children[0],
            _1 = container.children[0].children[1],
            middle_point = (parseInt(getComputedStyle(container).width) /2) - (parseInt(getComputedStyle(_1).width) /2) - (parseInt(getComputedStyle(container).paddingLeft)),
            margin = middle_point - parseInt(getComputedStyle(_0).width);
            console.log(margin)

            _1.style['margin-left'] = margin > 0 ? margin+'px' : 'unset';

            window.addEventListener('resize', this.pusher);
        }
    },
    mounted: function(){
        this.pusher()
    }
}
</script>

<style>
    .userFooter {
        color: #6c757d;
        /* color: $gray-500; */
    }

    .userFooter a {
        color: inherit;
        text-decoration: none;
    }
    .userFooter a:hover {
        color: #3490dc;
        /* color: $primary; */
    }
    .userFooter li {
        display: inline-block;
    }
    .userFooter li:not(:last-child) {
        margin-right: .75rem;
    }


    .userFooter .terms {
        padding: 0 .75rem;
        font-weight: 500;
    }

    .userFooter .icons svg {
        width: 1.25rem;
        height: 1.25rem;
        fill: #adb5bd;
        /* fill: $gray-500; */
    }
</style>
