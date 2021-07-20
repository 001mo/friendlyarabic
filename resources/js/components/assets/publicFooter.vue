<template>
    <div class="container-fluid publicFooter pt-5 pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="mb-5">
                        <div>
                            <a href="">
                                <img class="w-50" src="images/fa-logo.png">
                            </a>
                        </div>
                        <div class="pt-4">
                            <div v-html="`
                                Friendly Arabic gives you instant access to arabic native speakers via live video chat. Learn with confidence at your own place and in your time!
                            `">
                            </div>
                        </div>
                        <div class="pt-5">
                            <div v-html="`Sign Up to our newsletter`"></div>
                            <div id="subscribe" class="pt-3">
                                <div id="subscribe" class="d-flex flex-row flex-nowrap no-gutters">
                                    <input type="text" class="no-outline col-7" autocomplete="email" placeholder="E-Mail Address">
                                    <button class="btn no-box-shadow no-outline col-5" v-html="'SUBSCRIBE'"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none">
                        <hr class="w-100 bg-white">
                    </div>
                </div>
                <div class="col-12 pt-5 pt-md-0 col-md-4 company">
                    <div class="mb-5">
                        <div>
                            <h6 v-html="'COMPANY'"></h6>
                        </div>
                        <div class="pt-2">
                            <ul class="list-unstyled">
                                <li><a href="" v-html="'About us'"></a></li>
                                <li><a href="" v-html="'Join our family'"></a></li>
                                <li><a href="" v-html="'Teachers'"></a></li>
                                <li><a href="" v-html="'Blog'"></a></li>
                                <li><a href="" v-html="'MEMBERSHIPS'"></a></li>
                                <li><a href="" v-html="'Contact us'"></a></li>
                                <li><a href="" v-html="'School and corprate deals'"></a></li>
                                <li><a href="" v-html="'FAQ'"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-md-none">
                        <hr class="w-100 bg-white">
                    </div>
                </div>
                <div class="col-12 pt-5 pt-md-0 col-md-2 socialMedia">
                    <div class="mb-5">
                        <div>
                            <h6 v-html="'SOCIAL MEDIA'"></h6>
                        </div>
                        <div class="pt-2">
                            <div class="mr-2 mb-2 d-inline-block icon">
                                <a href="">
                                    <div class="border rounded-circle border-black p-2">
                                        <facebook-logo></facebook-logo>
                                    </div>
                                </a>
                            </div>
                            <div class="mr-2 mb-2 d-inline-block icon">
                                <a href="">
                                    <div class="border rounded-circle border-black p-2">
                                        <twitter-logo></twitter-logo>
                                    </div>
                                </a>
                            </div>
                            <div class="mr-2 mb-2 d-inline-block icon">
                                <a href="">
                                    <div class="border rounded-circle border-black p-2">
                                        <linkedin-logo></linkedin-logo>
                                    </div>
                                </a>
                            </div>
                            <div class="mr-2 mb-2 d-inline-block icon">
                                <a href="">
                                    <div class="border rounded-circle border-black p-2">
                                        <instagram-logo></instagram-logo>
                                    </div>
                                </a>
                            </div>
                            <div class="mr-2 mb-2 d-inline-block icon">
                                <a href="">
                                    <div class="border rounded-circle border-black p-2">
                                        <youtube-logo></youtube-logo>
                                    </div>
                                </a>
                            </div>
                            <div class="mr-2 mb-2 d-inline-block icon">
                                <a href="">
                                    <div class="border rounded-circle border-black p-2">
                                        <pinterest-logo></pinterest-logo>
                                    </div>
                                </a>
                            </div>
                            <div class="mr-2 mb-2 d-inline-block icon">
                                <a href="">
                                    <div class="border rounded-circle border-black p-2">
                                        <quora-logo></quora-logo>
                                    </div>
                                </a>
                            </div>
                            <div class="mr-2 mb-2 d-inline-block icon">
                                <a href="">
                                    <div class="border rounded-circle border-black p-2">
                                        <m-logo></m-logo>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none">
                        <hr class="w-100 bg-white">
                    </div>
                </div>
                <div class="col-12 pt-5 pt-md-0 col-md-2 stayConnected">
                    <div class="mb-5">
                        <div>
                            <h6 v-html="'STAY CONNECTED'"></h6>
                        </div>
                        <div class="pt-2">
                            <div class="mb-3">
                                <a href="https://apps.apple.com/az/app/friendly-arabic/id1568071668">
                                    <img class="w-100" src="images/app-store-badge.png">
                                </a>
                            </div>
                            <div class="mb-3">
                                <a href="https://play.google.com/store/apps/details?id=com.friendly.arabic.prod">
                                    <img class="w-100" src="images/play-store-badge.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none">
                        <hr class="w-100 bg-white">
                    </div>
                </div>
            </div>


            <div class="row no-gutters justify-content-md-end pt-5">
                <div class="mr-4">
                    <a href="" v-html="'Terms and Conditions'"></a>
                </div>
                <div>
                    <a href="" v-html="'Privacy policy'"></a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import FacebookLogo from './icons/logos/facebookLogoUnfill.vue';
import LinkedinLogo from './icons/logos/linkedinLogoUnfill.vue';
import TwitterLogo from './icons/logos/twitterLogoUnfill.vue';
import InstagramLogo from './icons/logos/instagramLogoUnfill.vue';
import YoutubeLogo from './icons/logos/youtubeLogoUnfill.vue';
import PinterestLogo from './icons/logos/pinterestLogo.vue';
import QuoraLogo from './icons/logos/quoraLogo.vue';
import MLogo from './icons/logos/mLogo.vue';

export default {
    components: {
        FacebookLogo,
        LinkedinLogo,
        TwitterLogo,
        InstagramLogo,
        YoutubeLogo,
        PinterestLogo,
        QuoraLogo,
        MLogo,
    },

}
</script>
<style>
    .publicFooter {
        background-color: #383535;
        color: #fff;
        font-size: 13px;
    }
    .publicFooter h6 {
        font-size: .8rem;
    }
    .publicFooter a {
        color: #fff;
        transition: color 150ms;
    }
    .publicFooter a:hover {
        color: var(--gray);
        text-decoration: none;
    }

    #subscribe input {
        color: #fff;
        background-color: transparent;
        font-size: unset;
        padding-left: .75rem;
        padding-right: .75rem;
        border-width: 1px;
        border-color: #000 transparent #000 #000;
        border-radius: .5rem 0 0 .5rem;
    }
    #subscribe input::placeholder {
        font-size: inherit;
        color: #fff;
    }

    #subscribe button {
        color: #fff;
        font-size: unset;
        padding: .75rem;
        background-color: #000;
        border: 1px solid inherit;
        border-radius: 0 .5rem .5rem 0;
    }
    #subscribe button:hover {
        color: var(--gray);
    }
    #subscribe button:focus {
        color: var(--gray);
    }

    .company li {
        display: inline-block;
        margin: 0 1rem .5rem 0;
    }

    .socialMedia svg {
        width: 15px;
        height: 15px;
        fill: #fff;
    }

    .socialMedia .border {
        transition: border-color 150ms;
    }
    .socialMedia a:hover .border {
        border-color: #fff !important;
    }

    @media(max-width: 767px){
        #subscribe input {
            border-width: 2px;
        }


        .stayConnected img {
            max-width: 150px;
        }
    }
</style>
