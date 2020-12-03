// je recupere le boutton de controle plus
var bouttonPlus=document.querySelector('.controlle-plus');
//je lui ajoute un evenement
var numeroEpisode=document.querySelector('.numero-episode');
var buttonEpisode=document.querySelector('.episode');


bouttonPlus.addEventListener('click',function(){
//je selection l'affichage de l'episode




if(parseInt(buttonEpisode.dataset.episode)>=1 && parseInt(buttonEpisode.dataset.episode)<=9){
   
    
    buttonEpisode.dataset.episode=parseInt(buttonEpisode.dataset.episode)+1
 
    numeroEpisode.innerText=buttonEpisode.dataset.episode
 

    
}

})

var bouttonMoins=document.querySelector('.controllerMoins');

bouttonMoins.addEventListener('click',function(){
    //je selection l'affichage de l'episode
 

    if(parseInt(buttonEpisode.dataset.episode)>=2 && parseInt(buttonEpisode.dataset.episode)<=10){
     
        buttonEpisode.dataset.episode=parseInt(buttonEpisode.dataset.episode)-1
 
        numeroEpisode.innerText=buttonEpisode.dataset.episode
 
  

      
      
        
    }
   
    })

var buttonEpisode=document.querySelector('.episode');
buttonEpisode.addEventListener('click',function(){
    var episode=buttonEpisode.dataset.episode;
    window.location = "/serie/dardevil/episode/"+episode
})