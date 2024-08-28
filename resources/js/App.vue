<template>
    <router-view v-slot="{ Component, route }">
        <div :key="route.name">
            <component :is="Component" />
        </div>
    </router-view>
</template>

<script>
import { Modal } from 'bootstrap';
export default {
    name: 'App'
}
</script>
