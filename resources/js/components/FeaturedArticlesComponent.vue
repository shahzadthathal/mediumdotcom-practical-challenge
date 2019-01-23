<template>
    
    <div>
        <article class="mb-12 flex" v-for="article in featuredArticles">
            <div class="w-3/4">
                <h2 class="mb-4">
                    <a :href="'article/'+article.topic_slug+'/'+article.slug" class="text-black text-sm md:text-1xl no-underline hover:underline">
                    {{article.title.substring(0,80)}}
                    </a> 
                </h2>
                <p class="text-grey-darker leading-normal" v-html="article.description.substring(0,50)">
                </p>
                <div class="mb-4 mt-4 text-sm text-grey-darker">
                    <a href="#" class="text-black no-underline">{{article.author}}</a>
                    <span class="mx-1"> in </span>
                    <a href="#" class="text-black no-underline">{{article.topic_title}}</a>
                </div>
                <div class="mb-4 mt-4 text-sm text-grey-darker">
                    <a href="#" class="text-grey-darker no-underline">{{article.created_at}}</a>
                    <span class="font-bold">.</span>
                    <span class="mx-1 no-underline"> {{article.reading_time}} read </span>
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
                    description: '',
                    clap: '',
                    author: '',
                    topic_title: '',
                    topic_slug: '',
                    clap: '',
                    created_at: '',
                    reading_time: ''
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
