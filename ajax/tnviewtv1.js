var output="";

function load(){
    var xhr = new XMLHttpRequest();
    var title=document.getElementById('title').value;
    var title1=document.getElementById('title1').value;
    document.getElementById('titlephp').value=title1;
    var result=title.split(' ').join('+');
    console.log(result);
    xhr.open('GET','https://api.themoviedb.org/3/tv/'+title+'?api_key=a488dee721f2e2b9a285f7aa50bd95d5&language=en-US',true);

    xhr.onload=function(){
        if(this.status==200 && title.length>0){
            var movie=JSON.parse(this.responseText);
            console.log(movie);
            var poster='<img src="https://image.tmdb.org/t/p/original'+movie.poster_path+'" style="width:154px;"><br>';
            var Title='Title: '+movie.original_name+'<br>';
            var plot='Plot: '+movie.overview+'<br>';
            var released='Release date: '+movie.first_air_date+'<br>';
            var episodes='Number of episodes: '+movie.number_of_episodes+'<br>';
            var seasons='Number of seasons: '+movie.number_of_seasons+'<br>';
            output=Title+released+poster+seasons+episodes+plot;

        }
        document.getElementById('movie').innerHTML=output;
    }
    xhr.send();
    var xhr1 = new XMLHttpRequest();
    xhr1.open('GET','http://api.themoviedb.org/3/tv/'+title+'/videos?api_key=a488dee721f2e2b9a285f7aa50bd95d5',true);
    xhr1.onload=function(){ 
        if(this.status==200 && title.length>0){
            var x=0;
            var movie1=JSON.parse(this.responseText);
            console.log(movie1);
            for (var i=0; i<5;i++){
                console.log(movie1.results[i].type);
                if(movie1.results[i].type=="Trailer"){
                    x=i;
                    break;
                }
            }
            video.src="http://www.youtube.com/embed/"+movie1.results[x].key+"";
        }
    }
    xhr1.send();
}