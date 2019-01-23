<template>

    <div class="p-1">
                
                <ol class="sm:list-reset md:list-reset lg:list-reset xl:list-reset text-grey-darkest">
                    
                    <li class="flex mb-6" v-for="article ,index in popularArticles">
                        <div class="w-1/4">
                            <span class="text-2xl text-grey"> {{ '0'+index+1}} </span>
                        </div>
                        <div class="w-3/4">
                            <a :href="'article/'+article.topic_slug+'/'+article.slug" class="no-underline text-black">
                                <h3 class="text-sm mb-2">{{article.title.substr(0,80)}}</h3>
                            </a>    
                            <div class="text-sm mt-2">
                                <p class="text-black leading-none">
                                    <a href="#" class="text-black no-underline  hover:text-grey-darkest">{{article.author}}</a>
                                    in <a href="#" class="text-black no-underline  hover:text-grey-darkest">{{article.topic_title}}
                                    </a>
                                </p>
                                <p class="text-grey-dark mt-1 mb-1">
                                   <span :title="article.created_at"> {{article.created_at}} </span class="font-bold"> . <span :title="article.reading_time +' read'">{{article.reading_time}} read</span>
                                </p>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
</template>


<script>
    export default {
        data(){
        	return {
                popularArticles:[],
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
        		fetch('api/popular/articles')
        			.then(res => res.json())
        			.then(res => {
        				//console.log(res.data);
        				this.popularArticles = res.data.popularArticles;
        			});
        	}
        }
    }
</script>
