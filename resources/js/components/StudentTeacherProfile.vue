<template>
    <div>
        <div class="container fa-container-lg-bound">
            <div class="pt-10">
                <div class="row no-gutters justify-content-center p-4">
                    <div class="col-12 col-md-4">
                        <div class="text-center">
                            <div>
                                <img class="w-100 h-100 border border-transparent rouned-xl" src="https://lh3.googleusercontent.com/ogw/ADea4I5YBNxJP33I8Aj8sg4HeHdLdTibyXAEQDCodIp_=s83-c-mo">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 pt-5 pt-md-0 pl-md-6">
                        <div>
                            <h2>Teachers's Name</h2>
                        </div>
                        <div class="pt-2">
                            <span>
                                <span>
                                    <stars-rating :stars="3" :margin="5" :width="15" class="d-inline-block"></stars-rating>
                                </span>
                            </span>
                            <span class="pl-4">
                                <span class="border border-dark py-1 px-3">
                                    <flag :size="1.25" :fill="'#000'" :sizeUnit="'rem'"></flag>
                                </span>
                            </span>
                        </div>

                        <div class="pt-5 t-description text-muted">
                            Chilling Vibes presents a compilation of the best Chillout Vibes - Relaxing Music.
                            Enjoy the best Piano Music to Relax, chillout, background music, anime music, meditation music, study music, music for work and music for sleep.
                            The best instrumental music composed of carefully selected relaxing music. Your perfect late night mix playlist.
                            Enjoy the best Piano Music to Relax, chillout, background music, anime music, meditation music, study music, music for work and music for sleep
                        </div>

                        <div class="pt-4">
                            <div class="text-md-right">
                                <button class="btn btn-xl btn-primary text-uppercase py-2 px-5">call</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="pt-5">
            <div class="text-capitalize">
                <h5 class="m-0 font-weight-bold text-secondary">languages</h5>
            </div>
            <div class="pt-3">
                <div class="h60">
                    <div class="row no-gutters">
                        <div class="p-2">
                            <div v-for="n in 4" class="p-2 d-inline-block"><span class="badge badge-pill py-1 px-4" v-html="'English'"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="text-capitalize">
                <h5 class="m-0 font-weight-bold text-secondary">specialities</h5>
            </div>
            <div class="pt-3">
                <div class="h60">
                    <div class="row no-gutters">
                        <div class="p-2">
                            <div v-for="n in 4" class="p-2 d-inline-block"><span class="badge badge-pill py-1 px-4" v-html="'English'"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="text-capitalize">
                <h5 class="m-0 font-weight-bold text-secondary">Teaching style</h5>
            </div>
            <div class="pt-3">
                <div class="h23">
                    <div class="text-capitalize">
                        illing Vibes presents a compilation of the best
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="text-capitalize">
                <h5 class="m-0 font-weight-bold text-secondary">professional background</h5>
            </div>
            <div class="pt-3">
                <div class="h23">
                    <div class="text-capitalize">
                        illing Vibes presents a compilation of the best Chillout Vibes - Relaxing Music.
                        Enjoy the best Piano Music to Relax, chillout, background music, anime music, meditation music, study music, music for work and music for sleep.
                        The best instrumental music composed of carefully selected relaxing
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-10">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="w-100">
                        <img class="w-100 border border-transparent rouned-xl" src="https://lh3.googleusercontent.com/ogw/ADea4I5YBNxJP33I8Aj8sg4HeHdLdTibyXAEQDCodIp_=s83-c-mo"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-10">
            <div class="px-2">
                <h1 class="text-dark">Schedule a session</h1>
            </div>
            <div class="pt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                            <div class="calendar px-5 pt-5 pb-4">
                                <div class="calendarHeader text-left px-4">
                                    <div class="d-inline-flex flex-nowrap justify-content-between">
                                        <div class="col-2">
                                            <left-arrow :size="14"></left-arrow>
                                        </div>
                                        <div class="col-8">
                                            <h5 class="font-weight-600" v-html="'september 2021'"></h5>
                                        </div>
                                        <div class="col-2">
                                            <right-arrow :size="14"></right-arrow>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-3">
                                    <table class="table table-responsive d-md-table">
                                        <tr id="tableHead">
                                            <th><div>sun</div></th>
                                            <th><div>mon</div></th>
                                            <th><div>tue</div></th>
                                            <th><div>wed</div></th>
                                            <th><div>thu</div></th>
                                            <th><div>fri</div></th>
                                            <th><div>sat</div></th>
                                        </tr>

                                        <tr>
                                            <th><div>1</div></th>
                                            <th><div>2</div></th>
                                            <th><div>3</div></th>
                                            <th><div>4</div></th>
                                            <th><div>5</div></th>
                                            <th><div>6</div></th>
                                            <th><div>7</div></th>
                                        </tr>

                                        <tr>
                                            <th><div>8</div></th>
                                            <th><div>9</div></th>
                                            <th><div>10</div></th>
                                            <th><div>11</div></th>
                                            <th><div>12</div></th>
                                            <th><div>13</div></th>
                                            <th><div>14</div></th>
                                        </tr>

                                        <tr>
                                            <th><div>15</div></th>
                                            <th><div>16</div></th>
                                            <th><div>17</div></th>
                                            <th><div>18</div></th>
                                            <th><div>19</div></th>
                                            <th><div>20</div></th>
                                            <th><div>21</div></th>
                                        </tr>

                                        <tr>
                                            <th><div>22</div></th>
                                            <th><div>23</div></th>
                                            <th><div>24</div></th>
                                            <th><div>25</div></th>
                                            <th><div>26</div></th>
                                            <th><div>27</div></th>
                                            <th><div>28</div></th>
                                        </tr>

                                        <tr>
                                            <th><div>29</div></th>
                                            <th><div>30</div></th>
                                            <th><div>31</div></th>
                                        </tr>
                                    </table>
                                </div>

                                <div>
                                    <a href="#" class="font-weight-bold text-capitalize">show all times</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container-fluid fa-container-xl-bound pt-10 pb-5">
            <div class="row justify-content-center no-gutters">
                <div class="col-1 d-none d-sm-block">
                    <div class="h-100 d-flex flex-column justify-content-center">
                        <button @click="showPrev" class="btn no-outline no-box-shadow">
                            <left-arrow :size="27"></left-arrow>
                        </button>
                    </div>
                </div>
                <div class="col-10 col-sm-10">
                    <carousel v-bind="options.carousel" ref="carousel_ref">
                        <div class="fa-carousel-item card" v-for="s in 10">
                            <img class="card-img-top" src="https://lh3.googleusercontent.com/ogw/ADea4I5YBNxJP33I8Aj8sg4HeHdLdTibyXAEQDCodIp_=s83-c-mo">
                            <div class="card-body">
                                <h5 class="card-title" v-html="`Teacher's name`"></h5>
                                <div class="card-text" v-html="'googleusercontent.com/ogw/ADea4I5YBN'"></div>
                            </div>
                        </div>
                    </carousel>
                </div>
                <div class="col-1 d-none d-sm-block">
                    <div class="h-100 d-flex flex-column justify-content-center">
                        <button @click="showNext" class="btn no-outline no-box-shadow">
                            <right-arrow :size="27"></right-arrow>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import Carousel from './assets/carousel/Carousel.vue';
import Flag from './assets/icons/flag.vue';
import leftArrow from './assets/icons/leftArrow.vue';
import RightArrow from './assets/icons/RightArrow.vue';
import StarsRating from './assets/StarsRating.vue';

export default {
    components: {
        StarsRating,
        RightArrow,
        leftArrow,
        Carousel,
        Flag
    },
    mounted(){
        //
    },
    methods: {
        showNext: function(){
            this.$refs.carousel_ref.showNext();
        },
        showPrev: function(){
            this.$refs.carousel_ref.showPrev();
        }
    },
    data(){
        return {
            options: {
                carousel: {
                    nav: false,
                    dots: false,
                    rewind: false,
                    autoplay: false,
                    center: false,
                    responsive: {
                        0: {
                            items: 1,
                            margin: 0,
                        },
                        576: {
                            items: 2,
                            margin: 7
                        },
                        768: {
                            items: 3,
                            margin: 7,
                        }
                    }
                }
            }
        }
    }
}
</script>

<style lang="scss">
    @import '../../sass/teacher_profile.scss';
</style>
