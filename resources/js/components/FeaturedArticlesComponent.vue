<template>
    
    <div>
        <article class="mb-12 flex" v-for="article in featuredArticles">
            <div class="w-3/4">
                <h2 class="mb-4">
                    <a href="#" class="text-black text-sm md:text-1xl no-underline hover:underline">
                    {{article.title.substring(0,80)}}
                    </a> 
                </h2>
                <p class="text-grey-darker leading-normal" v-html="article.description.substring(0,50)">
                </p>
                <div class="mb-4 mt-4 text-sm text-grey-darker">
                    <a href="#" class="text-black no-underline">Niklas Göke</a>
                    <span class="mx-1"> in </span>
                    <a href="#" class="text-black no-underline">Better Humans</a>
                </div>
                <div class="mb-4 mt-4 text-sm text-grey-darker">
                    <a href="#" class="text-grey-darker no-underline">19 Jan</a>
                    <span class="font-bold">.</span>
                    <span class="mx-1 no-underline"> 6 min read </span>
                </div>
            </div>
            <div class="w-1/4">
                <img v-bind:src="article.image">
            </div>
        </article>
    </div>

</template>


<script>
    export default {
        data(){
        	return {
                featuredArticles:[],
        		article:{
        			title: '',
        			slug: '',
        			image: '',
        			description: ''
        		},
        	}
        },
        created(){
        	this.getData();
        },
        methods:{
        	getData(){
        		fetch('api/featured/articles')
        			.then(res => res.json())
        			.then(res => {
        				//console.log(res.data);
        				this.featuredArticles = res.data.featuredArticles;
        			});
        	}
        }
    }
</script>
