<template>
<div>
    <img v-bind:src="cover" v-bind:title="{{ title }}" alt="">
<h1>{{ title }}</h1>
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
        }
        methods: {
            handleLike() {
                this.like++;
            }
        },
    }
</script>
