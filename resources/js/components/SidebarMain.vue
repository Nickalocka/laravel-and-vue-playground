<template>
    <section v-bind:class="{ active: show_sidebar }" class="sidebar_main _left" v-on:click="toggle">
        <span class="sidebar-link-close"><i class="fas fa-angle-double-left"></i><i class="fas fa-angle-double-right"></i></span>
        <a href="/" class="sidebar-link">
            <span> - </span> Home
        </a>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                show_sidebar: false,
            }
        },
        mounted() {
        },
        methods: {
            toggle: function () {
                this.show_sidebar = !this.show_sidebar;
            }
        }
    }
</script>