(function(b){var a=function(d){var c=b(d);this.id=c.attr("id");c.bind("click.playlist",this._enableOnClick)};a._CSS={thumbnails:".cb-youtube-local-playlist-page-video-thumbnail"};a._EMBED_URL_BASE="http://www.youtube.com/embed/";a._IFRAME_HEIGHT=349;a._IFRAME_WIDTH=560;a._VIDEO_ID_PREFIX="video__";a._loaders=[];a.initializeLoaders=function(){var d=[];var c;b(a._CSS.thumbnails).each(function(e,f){if(!a._isThumbnailBound(f)){c=new a(f);a._loaders.push(c);d.push(c)}});return d};a._isThumbnailBound=function(f){var e=b(f).attr("id");var c=a._loaders;for(var d=0;d<c.length;d++){if(c[d].id==e){return true}}return false};a._getVideoIDFromElementID=function(c){return c.replace(a._VIDEO_ID_PREFIX,"")};a.prototype.id=null;a.prototype._enableOnClick=function(d){d.preventDefault();var c=b(this);iframe='<iframe width="'+a._IFRAME_WIDTH+'" height="';iframe+=a._IFRAME_HEIGHT+'" src="';iframe+=a._EMBED_URL_BASE+a._getVideoIDFromElementID(c.attr("id"))+'"';iframe+=' frameborder="0" allowfullscreen></iframe>';c.html(iframe);c.unbind("click.playlist")};b(document).ready(function(){a.initializeLoaders()})})(jQuery);