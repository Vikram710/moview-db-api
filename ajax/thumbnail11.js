var outputm="";
var outputtv='';

//e98d7e11,4a249f8d

function load(){
    var xhr = new XMLHttpRequest();
    var xhr1 = new XMLHttpRequest();
    xhr.open('GET','https://api.themoviedb.org/3/trending/movie/week?api_key=a488dee721f2e2b9a285f7aa50bd95d5',true);
    xhr1.open('GET','https://api.themoviedb.org/3/trending/tv/week?api_key=a488dee721f2e2b9a285f7aa50bd95d5',true);

    xhr.onload=function(){
        if(this.status==200){
            var movie=JSON.parse(this.responseText);
            console.log(movie);
            for(var i =0;i<20;i++){
            outputm=outputm+'<a href="view.php?title='+movie.results[i].id+'&title1='+movie.results[i].title+'"><img src="https://image.tmdb.org/t/p/original'+movie.results[i].poster_path+'"></a>';
        }}
        document.getElementById('movies').innerHTML=outputm;
    }
    xhr.send();
    xhr1.onload=function(){
        if(this.status==200){
            var tv=JSON.parse(this.responseText);
            console.log(tv);
            for(var i =0;i<20;i++){
            outputtv=outputtv+'<a href="viewtv.php?title='+tv.results[i].id+'&title1='+tv.results[i].original_name+'"><img src="https://image.tmdb.org/t/p/original'+tv.results[i].poster_path+'"></a>';
        }}
        document.getElementById('tvshows').innerHTML=outputtv;
    }
    xhr1.send();
}
load(); 