<template>
    <div class="user">
        <a :href="route">
            <img :src="avatar"  :alt="name" class="user__img">
        </a>
        <h1 class="user__name">{{ name }}</h1>
    </div>
</template>

<script>
    export default {
        props: {
            name: String,
            avatar: String,
            route: String
        }
    }
</script>

<style lang="scss" scoped>
    .user {
        text-align: center;
        padding: 1rem;

        &__img {
            width: 5rem;
            border-radius: 50%;
            margin-bottom: .5rem;
        }

        &__name {
            font-weight: 800;
        }
    }
</style>
