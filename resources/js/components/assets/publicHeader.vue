<template>
    <fa-header>
        <template v-slot:inCollapse>
            <div class="navbar-nav">
                <button class="btn btn-link mr-md-4 no-outline" v-html="'log In'"></button>
                <button class="btn btn-sm btn-primary text-uppercase m-auto px-4 p-1 rounded-md" v-html="'SIGN UP'"></button>
            </div>
        </template>
    </fa-header>
</template>
<script>
import faHeader from './faHeader.vue';

export default {
    components: { faHeader },
}
</script>
