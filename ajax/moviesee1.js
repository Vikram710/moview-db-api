var output="";


//e98d7e11,4a249f8d

function load(){

    var xhr = new XMLHttpRequest();
    var title=document.getElementById('title').value;
    document.getElementById('titlephp').value=title;
    var video=document.getElementById("video");
    var result=title.split(' ').join('+');
    console.log(result);
    xhr.open('GET','http://www.omdbapi.com/?t='+title+'&apikey=e98d7e11&type=movie',true);

    xhr.onload=function(){
        if(this.status==200 && title.length>0){
            var movie=JSON.parse(this.responseText);
            document.getElementById('sea').hidden=false;
            console.log(movie);
            var poster='<img src='+movie.Poster+'><br>';
            var Title='Title: '+movie.Title+'<br>';
            var plot='Plot: '+movie.Plot+'<br>';
            var rated='Rated: '+movie.Rated+'<br>';
            var genre='Genre: '+movie.Genre+'<br>';
            var actors='Actors: '+movie.Actors+'<br>';
            var runtime='Runtime: '+movie.Runtime+'<br>';
            var director='Director: '+movie.Director+'<br>';
            var released='Release date: '+movie.Released+'<br>';
            var imdbrating='Imdb rating: '+movie.imdbRating+'<br>';
            output=Title+genre+rated+runtime+released+imdbrating+poster+actors+director+plot;

        }
        document.getElementById('movie').innerHTML=output;

    }
    xhr.send();

    var xhr1 = new XMLHttpRequest();
    xhr1.open('GET','https://api.themoviedb.org/3/search/movie?api_key=a488dee721f2e2b9a285f7aa50bd95d5&query='+title+'',true);
    xhr1.onload=function(){ 
        if(this.status==200 && title.length>0){
            var movies=JSON.parse(this.responseText);
            console.log(movies);
            var xhr2 = new XMLHttpRequest();
            var id=movies.results[0].id;
            xhr2.open('GET','http://api.themoviedb.org/3/movie/'+id+'/videos?api_key=a488dee721f2e2b9a285f7aa50bd95d5',true);
            xhr2.onload=function(){ 
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
            xhr2.send();
        }
    }
    xhr1.send();

   

}




