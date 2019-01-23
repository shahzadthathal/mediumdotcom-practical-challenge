<template>

    <div class="p-1">
                
                <ol class="sm:list-reset md:list-reset lg:list-reset xl:list-reset text-grey-darkest">
                    
                    <li class="flex mb-6" v-for="article in popularArticles">
                        <div class="w-1/4">
                            <span class="text-2xl text-grey"> 01 </span>
                        </div>
                        <div class="w-3/4">
                            <a href="" class="no-underline text-black">
                                <h3 class="text-sm mb-2">{{article.title.substr(0,80)}}</h3>
                            </a>    
                            <div class="text-sm mt-2">
                                <p class="text-black leading-none">
                                    <a href="#" class="text-black no-underline  hover:text-grey-darkest">Jonathan Reinink</a>
                                    in <a href="#" class="text-black no-underline  hover:text-grey-darkest">Science
                                    </a>
                                </p>
                                <p class="text-grey-dark mt-1 mb-1">
                                    <span title="Aug 18"> Aug 18</span> . <span title="6 min read">6 min read</span>
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
        			description: ''
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
