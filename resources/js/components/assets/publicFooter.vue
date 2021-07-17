<template>
    <div id="publicFooter" class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <!-- <div>
                        <img src="https://secureservercdn.net/104.238.69.231/pns.ac4.myftpupload.com/wp-content/uploads/2020/05/%D9%86%D9%87%D8%A7%D8%A6%D9%8A-12.png" style="width: 100%">
                    </div> -->
                    <div class="pt-4">
                        <div v-html="`
                            How fast is your download speed? In seconds, FAST.com's simple Internet speed test will estimate your ISP speed.
                        `">
                        </div>
                    </div>
                    <div class="pt-5">
                        <div v-html="`signup to our newsletter`"></div>
                        <div class="pt-2">
                            <div>
                                <input type="text" placeholder="subscribe">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-capitalize">
                        <h4 class="text-uppercase" v-html="'company'"></h4>
                        <ul class="list-unstyled">
                            <li v-html="'about us'"></li>
                            <li v-html="'join our family'"></li>
                            <li v-html="'teachers'"></li>
                            <li v-html="'blog'"></li>
                            <li class="text-uppercase" v-html="'memberships'"></li>
                            <li v-html="'contact us'"></li>
                            <li v-html="'school and corprate deals'"></li>
                            <li class="text-uppercase" v-html="'faq'"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="p-2" v-for="i in 8">
                            <span class="border rounded-circle border-white p-4">
                                <left-arrow :size="20" fill="#fff"></left-arrow>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6 v-html="'Stay Connected'"></h6>
                    <a class="btn">
                        <span>
                            <apple-logo :size="22"></apple-logo>
                        </span>
                        <span>
                            <div v-html="'Download on the'"></div>
                            <div v-html="'App Store'"></div>
                        </span>
                    </a>
                    <button class="btn">
                        <span>
                            <playstore-logo :size="22"></playstore-logo>
                        </span>
                        <span>
                            <div v-html="'Get It On'"></div>
                            <div v-html="'Google Play'"></div>
                        </span>
                    </button>
                </div>
            </div>
            <div class="row justify-content-md-end">

            </div>
        </div>
    </div>
</template>
<script>
import AppleLogo from './icons/appleLogo.vue'
import leftArrow from "./icons/leftArrow.vue"
import PlaystoreLogo from './icons/playstoreLogo.vue'

export default {
    components: {
        leftArrow,
        AppleLogo,
        PlaystoreLogo
    },

}
</script>
<style>
    #publicFooter {
        background-color: #383535;
        color: #fff;
    }
    #publicFooter li {
        display: inline !important;
    }

</style>
