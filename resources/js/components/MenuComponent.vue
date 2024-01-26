<template>
    <nav class="mainNav">
        <span class="mainMenu" v-on:click="toggleMenu()">
            MENU
        </span>
        <div :class="[this.menuOpen ? 'showBttns' : 'hideBttns', 'bttnList']">
            <div>
                <a href="/">
                    HOME
                </a>
            </div>
            <div>
                <a href="/works">
                    WORKS
                </a>
            </div>
            <div>
                <a href="/about">
                    ABOUT
                </a>
            </div>
            <div>
                <a href="/contact">
                    CONTACT
                </a>
            </div>
            <!-- @guest
            <div>
                <a href="{{ route('login') }}">{{ __('LOGIN') }}</a>
            </div>
            @else
            <div>
                <a href="{{ route('home') }}">{{ __('ACCOUNT') }}</a>
            </div>
            @endif -->
        </div>
    </nav>
</template>

<script>
    export default {
        data() {
            return {
                menuOpen: false
            }
        },
        methods: {
            toggleMenu: function() {
                if (this.menuOpen == true) {
                    this.menuOpen = false;
                    console.log("close menu");
                } else {
                    this.menuOpen = true;
                    console.log("open menu");
                };
            }
        }
    }
</script>