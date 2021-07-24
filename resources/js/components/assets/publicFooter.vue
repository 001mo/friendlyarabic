<template>
    <div class="container-fluid publicFooter pt-5 pb-4">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-10 col-md-4 info">
                    <div class="mb-5">
                        <div class="logo">
                            <a href="">
                                <img src="images/fa-logo.png">
                            </a>
                        </div>
                        <div class="pt-5 pt-md-4">
                            <div v-html="`
                                Friendly Arabic gives you instant access to arabic native speakers via live video chat. Learn with confidence at your own place and in your time!
                            `">
                            </div>
                        </div>
                        <div class="pt-5 subscribe">
                            <div v-html="`Sign Up to our newsletter`"></div>
                            <div class="pt-3">
                                <div class="d-flex flex-row flex-nowrap no-gutters">
                                    <input type="text" class="no-outline col-7" autocomplete="email" placeholder="E-Mail Address">
                                    <button class="btn no-box-shadow no-outline col-5" v-html="'SUBSCRIBE'"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-md-none col-12 px-4">
                    <hr class="w-100 bg-secondary">
                </div>
                <div class="col-10 pt-5 pt-md-0 col-md-4 company">
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
                </div>
                <div class="d-md-none col-12 px-4">
                    <hr class="w-100 bg-secondary">
                </div>
                <div class="col-10 pt-5 pt-md-0 col-md-2 socialMedia">
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
                </div>
                <div class="d-md-none col-12 px-4">
                    <hr class="w-100 bg-secondary">
                </div>
                <div class="col-10 pt-5 pt-md-0 col-md-2 stayConnected">
                    <div class="mb-5">
                        <div>
                            <h6 v-html="'STAY CONNECTED'"></h6>
                        </div>
                        <div class="pt-2">
                            <div class="mb-3 d-inline-block mr-2 mr-md-auto">
                                <a href="https://apps.apple.com/az/app/friendly-arabic/id1568071668">
                                    <img src="images/app-store-badge.png">
                                </a>
                            </div>
                            <div class="mb-3 d-inline-block mr-2 mr-md-auto">
                                <a href="https://play.google.com/store/apps/details?id=com.friendly.arabic.prod">
                                    <img src="images/play-store-badge.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-md-none col-12 px-4">
                    <hr class="w-100 bg-secondary">
                </div>
            </div>


            <div class="row no-gutters justify-content-end py-2 px-4">
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
<style lang="scss" scoped>
    @import '../../../sass/footers.scss';
</style>
