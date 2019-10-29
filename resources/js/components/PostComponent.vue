<template>
<div>
    <img v-bind:src="cover" alt="">
<h1>{{ title }} {{ like }}</h1>
<hr>
<p>{{ detail }}</p>
<button v-on:click="handleLike">Like</button>
</div>
</template>

<script> // MVVM
    export default {
        data() {
            return {
                title: 'ABC News asdasdTitle',
                detail: 'News detail',
                cover: 'http://lorempixel.com/400/200',
                like: 0
            }
        },
        props:['id', 'name'],
        created() {
            console.log('creating Post Component'  + this.id);
            this.callPostApi();
            console.log('Post Component has been created' + this.id);
        },
        methods: {
            async callPostApi() {
                try {
                    const res = await axios.get('/api/posts/' + this.id);
                    console.log(res.data);
                    if (res.status == 200) {
                        this.title = res.data.data.title;
                        this.detail = res.data.data.detail;
                        this.like = res.data.data.view_count;
                    }
                } catch (e) {
                    console.error(e);
                    this.title = 'Post ID: ${this.id} Not Found'
                }
            }

        },
    }
</script>
