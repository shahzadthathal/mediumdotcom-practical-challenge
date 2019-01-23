<template>

    <div>
        <div v-for="topic in topicWiseArticles">
            
            <div class="flex border-b mb-4 pb-4">
                    <div class="w-3/4 ">
                        <a :href="'topic/'+topic.slug" class="no-underline text-black text-lg font-bold">{{topic.name}}</a>
                    </div>
                    <div class="w-1/4 text-right">
                        <a :href="'topic/'+topic.slug" class="no-underline text-grey-dark text-sm">
                            MORE 
                            <svg class="text-sm" width="19" height="19">
                                <path d="M7.6 5.138L12.03 9.5 7.6 13.862l-.554-.554L10.854 9.5 7.046 5.692" fill-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <article class="mb-12 flex" v-for="article in topic.articles">
                <div class="w-3/4">
                    <h2 class="mb-4">
                        <a :href="'article/'+article.topic_slug+'/'+article.slug"  class="text-black text-sm md:text-1xl no-underline hover:underline">
                        {{article.title.substr(0,80)}}
                        </a> 
                    </h2>
                    <p class="text-grey-darker leading-normal" v-html="article.description.substr(0,100)">
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
    </div>

</template>


<script>
    export default {
        data(){
        	return {
                topicWiseArticles:[],
                topic:{
                    name: '',
                    slug: '',
                    articles: {}
                },
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
        		fetch('api/topic/wise/articles')
        			.then(res => res.json())
        			.then(res => {
        				console.log(res.data);
        				this.topicWiseArticles = res.data;
        			});
        	}
        }
    }
</script>
