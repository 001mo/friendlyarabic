<template>
    <div class="contact_us_page">
        <div class="content_wrapper" ref="content_wrapper">
            <fa-header></fa-header>
            <div class="container py-7">
                <div class="row justify-content-center">
                    <div class="col-md-7 d-none d-md-block">
                        <div class="h-100 d-flex flex-column justify-content-center contact_info">
                            <div>
                                <h3 v-text="'Contact Informations'"></h3>
                            </div>

                            <div class="gmail">
                                <span class="mr-2">
                                    <envelope></envelope>
                                </span>
                                <span v-text="'friendlyarabic1@gmail.com'"></span>
                            </div>

                            <!-- icons list -->
                            <div class="social_media_icons">
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


                    <!-- ========= FORM HALF ========== -->
                    <div class="col-12 col-md-5">
                        <div class="form_wrapper">
                            <div>
                                <h6 v-text="'Contact us'"></h6>
                            </div>
                            <div class="pt-3">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <div class="input-group">
                                                <label v-text="'Name'"></label>
                                                <input @focus="focusing($event)" @blur="bluring($event)" type="text" class="form-control"  autocomplete="name">
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <div class="input-group">
                                                <label v-text="'Email *'"></label>
                                                <input @focus="focusing($event)" @blur="bluring($event)" type="email" class="form-control" autocomplete="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label v-text="'Subject'"></label>
                                            <input @focus="focusing($event)" @blur="bluring($event)" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label v-text="'Your Message *'"></label>
                                            <textarea @focus="focusing($event)" @blur="bluring($event)" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary" v-text="'Submit'"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <fa-footer ref="footer" push></fa-footer>
    </div>
</template>

<script>
import faHeader from './assets/publicHeader.vue';
import faFooter from './assets/userFooter.vue';


import facebook from './assets/icons/logos/facebookLogo.vue';
import twitter from './assets/icons/logos/twitterLogo.vue';
import youtube from './assets/icons/logos/youtubeLogo.vue';
import instagram from './assets/icons/logos/instagramLogo.vue';
import linkedin from './assets/icons/logos/linkedinLogo.vue';
import pinterest from './assets/icons/logos/pinterestLogo.vue';
import quora from './assets/icons/logos/quoraLogo.vue';
import m from './assets/icons/logos/mLogo.vue';
import envelope from './assets/icons/envelope.vue';

export default {
    components: {
        faHeader,
        faFooter,
        facebook,
        twitter,
        youtube,
        instagram,
        linkedin,
        pinterest,
        quora,
        m,
        envelope
    },
    methods: {
        focusing: function(e){
            if (e.target.classList.contains('focus')) return false;

            e.target.classList += ' focus';
            e.target.previousElementSibling.classList += ' focus';
        },
        bluring: function(e){
            if(e.target.value) return false;

            e.target.classList.remove('focus');
            e.target.previousElementSibling.classList.remove('focus');
        }
    }
}
</script>
