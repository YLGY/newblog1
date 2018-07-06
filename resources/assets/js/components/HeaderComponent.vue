<template>
    <div class="header">
        <a :href="home" class="header__logo">Blog 1</a>
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__item">
                    <a :href="help">Help</a>
                </li>
                <li class="header__item">
                    <a href="#">Login</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        props: [
            'help',
            'home'
        ]
    }
</script>

<style lang="scss">
    .header {
        background: black;
        display: flex;
        justify-content: space-between;
        padding: 0 10vw;

        &__logo {
            color: white;
            font-weight: 800;
            font-size: 1.5rem;
        }

        &__nav {
            width: 10rem;
            display: flex;
            align-items: center;
        }

        &__list {
            margin: 0;
            flex: 1;
            
            display: flex;
            justify-content: space-around;
            align-content: center;

            list-style: none;

            a {
                color: white;
            }
        }
    }
</style>

