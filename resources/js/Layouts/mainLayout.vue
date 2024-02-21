<template>
    <div>
        <Link href="/listing">Listings</Link>&nbsp;
        <Link href="/listing/create">New Listing</Link>
        <!-- <div>Timer: {{ timer }}</div> -->
        <div v-if="flashSuccess" class="success">
            {{ flashSuccess }}
        </div>
        <!-- <div>
            {{ y }}
        </div> -->
    </div>
    <slot>Default</slot>
</template>

<script setup>
import { computed, ref } from "vue";
import { Link, usePage } from "@inertiajs/vue3";
// import { ref } from 'vue';

// page.props.value.flash.success
//const page = usePage();
const flashSuccess = computed(() => usePage().props.flash.success);

//const x = ref(0);
//const y = computed(() => x.value + 1);

// const timer = ref(0);
// setInterval(() => timer.value++, 1000);
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
```
