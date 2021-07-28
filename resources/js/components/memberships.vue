<template>
    <div>
        <div class="wrapper " ref="content">
            <fa-header></fa-header>
            <div class="container memberships pt-7 pb-6">
                <div>
                    <h3 v-text="'Choose your membership'"></h3>
                </div>
                <div class="row no-gutters justify-content-center justify-content-sm-start justify-content-md-center pt-5">
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3" v-for="i in 3">
                        <div class="py-2 p-md-2">
                            <div class="card text-center py-3 px-2">
                                <div class="card-body">
                                    <img src="https://picsum.photos/200">
                                </div>
                                <div class="pt-2">
                                    <h6 v-text="'Silver Membership'"></h6>
                                </div>
                                <div class="pt-2 text-left">
                                    <ul>
                                        <li v-text="'3 weekly lessons/30 minutes'"></li>
                                        <li v-text="'1 month 12 sessions'"></li>
                                    </ul>
                                </div>
                                <div>
                                    <div v-text="'Will start from '+ dateNow"></div>
                                </div>
                                <div class="pt-3 px-3">
                                    <div class="w-75 mx-auto">
                                        <button class="btn btn-primary btn-block" v-text="'Start for '+ price"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <fa-footer></fa-footer>
    </div>
</template>
<script>
import faHeader from './assets/publicHeader.vue';
import faFooter from './assets/publicFooter.vue';


export default {
    components: {
        faHeader,
        faFooter
        },
    data: function(){
        return {
            price: '$85.00',
            dateNow: '1-1-2000'
        }
    },
    mounted(){
        this.$children[1].footer_pusher(this.$refs.content);
    }
}
</script>
