<template>

	<div class="container max-w-2xl mx-auto flex flex-wrap items-start md:flex-no-wrap">

		<div class="my-4 w-full md:w-1/3 flex flex-col pr-4">
            <img v-bind:src="leftArticle.image" class="mb-6">
            <a :href="'article/'+leftArticle.topic_slug+'/'+leftArticle.slug" class="no-underline text-black">
                <h3 class="text-2xl mb-2">{{leftArticle.title.substring(0,65)}}</h3>
            </a>
            <p class="mt-3 text-sm leading-normal" v-html="leftArticle.description.substring(0,50)">...</p>
            <div class="text-sm mt-2">
                <p class="text-black leading-none">
                    <a href="#" class="text-black no-underline  hover:text-grey-darkest">{{leftArticle.author}}</a>
                    in <a href="" class="text-black no-underline  hover:text-grey-darkest"> {{leftArticle.topic_title}}
                    </a>
                </p>
                <p class="text-grey-dark mt-1">
                    <span :title="leftArticle.created_at"> {{leftArticle.created_at}} </span> . <span :title="leftArticle.reading_time +' read'">{{leftArticle.reading_time}} read</span>
                </p>
            </div>
        </div>
        <div class="my-4 w-full md:w-1/3 flex flex-col pr-4">
            
            <div class="flex mb-4 h-32" v-for="centerArticle in centerArticles">
                <div class="w-1/4" v-bind:style="{ backgroundImage: 'url(' + centerArticle.image + ')' }" style="background-position: 53% 50% !important;">
                </div>
                <div class="w-full pl-1">
                    <a :href="'article/'+centerArticle.topic_slug+'/'+centerArticle.slug" class="no-underline text-black">
                        <h3 class="text-sm mb-2">{{centerArticle.title.substring(0,65)}}</h3>
                    </a>
                    <p class="mt-3 text-sm leading-normal" v-html="centerArticle.description.substring(0,50)"></p>
                     <div class="text-sm mt-2">
                        <p class="text-black leading-none">
                            <a href="#" class="text-black no-underline  hover:text-grey-darkest">{{centerArticle.author}}</a>
                            in <a href="#" class="text-black no-underline  hover:text-grey-darkest">{{centerArticle.topic_title}}
                            </a>
                        </p>
                        <p class="text-grey-dark mt-1 mb-1">
                            <span :title="centerArticle.created_at"> {{centerArticle.created_at}}</span> . <span :title="centerArticle.reading_time+'  read'">{{centerArticle.reading_time}} read</span>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="my-4 w-full md:w-1/3 flex flex-col  pr-4">
             <img v-bind:src="rightArticle.image" class="mb-6">
            <a :href="'article/'+rightArticle.topic_slug+'/'+rightArticle.slug" class="no-underline text-black">
                <h3 class="text-2xl mb-2">{{rightArticle.title.substring(0,65)}}</h3>
            </a>
            <p class="mt-3 text-sm leading-normal" v-html="rightArticle.description.substring(0,50)">...</p>
            <div class="text-sm mt-2">
                <p class="text-black leading-none">
                    <a href="#" class="text-black no-underline  hover:text-grey-darkest">{{rightArticle.author}}</a>
                    in <a href="#" class="text-black no-underline  hover:text-grey-darkest">{{rightArticle.topic_title}}
                    </a>
                </p>
                <p class="text-grey-dark mt-1">
                    <span :title="rightArticle.created_at"> {{rightArticle.created_at}}</span> . <span :title="rightArticle.reading_time+' read'">{{rightArticle.reading_time}} read</span>
                </p>
            </div>
        </div>

	</div>
	
</template>


<script>
    export default {
        data(){
        	return {
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
        		leftArticle:{
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
        		centerArticles: [],
        		centerArticle:{
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
        		rightArticle:{
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
        		popularArticles:[],
        	}
        },
        created(){
        	this.getData();
        },
        methods:{
        	getData(){
        		fetch('api/latest/articles')
        			.then(res => res.json())
        			.then(res => {
        				//console.log(res.data);
        				this.leftArticle = res.data.leftSideArticle;
        				this.centerArticles = res.data.centerSideArticles;
        				this.rightArticle = res.data.rightSideArticle;

        			});
        	}
        }
    }
</script>
