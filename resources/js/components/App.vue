<template>
    <ul v-if="posts.length">
        <h1 class="subtitle">POSTS</h1>
        <li v-for="(post, index) in 10" :key="index">
            <div class="card is-grey-dark">
                <header class="card-header is-link">
                <p class="card-header-title is-link">
                    {{ posts[index].title }}
                </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        {{ posts[index].body }}
                    </div>
                </div>
                <footer class="card-footer is-grey-darker">
                    <p class="card-footer-item">Post ID: {{ posts[index].id }}</p>
                    <p class="card-footer-item">User ID: {{ posts[index].userId }}</p>
                </footer>
            </div>
        </li>
    </ul>
    <div class="box has-text-centered">
        <button class="button is-link" :class="loading ? 'is-loading' : ''" v-show="!posts || !posts.length" v-on:click="getPosts()">List Posts</button>
    </div>
</template>

<script>
export default {

    data() {
        return {
            posts: [],
            loading: false
        };
    },

    methods: {
        getPosts() {
            this.loading = true;
            axios.get('api/jsonplaceholder/posts')
                .then(response => this.posts = response.data)
                .catch(error => {});
        }
    }
};
</script>

<style scoped>
.card {
    background-color: lightgray;
    margin-bottom: 3rem;
}
.card-header-title {
    color: #306ea6;
}
.subtitle {
    padding-top : 24px;
    color: #d76a27;
}
</style>
