$(document).ready(function(){
  var playlist = [{
      title:"单婷",
	  artist:"想你是种病",
      mp3: "st.mp3",
      poster: "images/st.jpg"
  }];
  
  var cssSelector = {
    jPlayer: "#jquery_jplayer",
    cssSelectorAncestor: ".music-player"
  };
  
  var options = {
    swfPath: "Jplayer.swf",
    supplied: "ogv, m4v, oga, mp3"
  };
  
  var myPlaylist = new jPlayerPlaylist(cssSelector, playlist, options);
  
  
});
