<template>
    <fa-header>
        <template v-slot:outCollapse>
            <span class="px-2">
                <a href="#">
                    <calendar-icon :size="16" class="icon"></calendar-icon>
                </a>
            </span>
            <span class="px-2">
                <a href="#">
                    <exclamation-icon :size="16" class="icon"></exclamation-icon>
                </a>
            </span>
            <span class="px-2">
                <a href="#">
                    <user-icon :size="25" class="icon"></user-icon>
                </a>
            </span>
        </template>
    </fa-header>
</template>
<script>
import faHeader from './faHeader.vue';
import userIcon from './icons/user.vue';
import calendarIcon from './icons/calendar.vue';
import exclamationIcon from './icons/exclamation.vue';

export default {
    components: {
        faHeader,
        userIcon,
        calendarIcon,
        exclamationIcon
    }
}
</script>
