/* ************************************************************************************** *
 * Das Script kann frei verwendet werden, dieser Kommentar, der URL sowie die Nennung des
 * Namens und des Nicks m�ssen jedoch erhalten bleiben.
 *
 *                                                                  Quelle: www.quaese.de
 *                                                          Markus "Quaese" H�llein, 2011
 * ************************************************************************************** */

(function($){
  $.widget("qp.tagcloud", {

    // _cloudFn: function(){},
    tagMinCount: 0,
    tagMaxCount: 0,

    // Default-Optionen
    options: {
	    tagMin: 1,					// Mindestanzahl f�r Tag-Count
      fontMin: 8,					// Minimale Schriftgr�sse
	    fontMax: 22,				// Maximale Schriftgr�sse
      fontUnit: 'px',			// Einheit der Schriftgr�sse
	    animDuration: 400,	// Dauer der Animation (in Millisekunden)
	    animFontDiff: 8,		// �nderung der Schriftgr�sse
      cloudWeight: 'log', // also possible: linear
      thresholds: 0,      // Schwellenwert ab dem ausgewertet werden soll (integer)
      words: []
    },

    // Widget
    _create: function() {
    	var self = this,
      		o    = self.options,
          elem = self.element;

      // Mininmal- und Maximalwert bestimmen
      $.each(o.words, function(i, value){
	      if(value.count > self.tagMaxCount)
        	self.tagMaxCount = value.count;

        if(i==0)
        	self.tagMinCount =  value.count;
        else if(value.count < self.tagMinCount)
        	self.tagMinCount = value.count;
	    });

      // Konstante f�r Tagcloud-Algorithmus
    	self._contstant = Math.log(self.tagMaxCount - (self.tagMinCount - 1))/((o.fontMax - o.fontMin)==0 ? 1 : (o.fontMax - o.fontMin));

    	// Tagcloud-Array durchlaufen
	    $.each(o.words, function(i, value){
				// Schrifth�he f�r aktuellen Tag berechnen
        var cloudHeight = self._getTagSizeLogarithmic(value.count);

        // Link f�r Tagcloud generieren
	      var $cloudLink = $('<a href="'+value.href+'">'+value.word+'</a>').appendTo(elem).hide();
				// Link mit Basisdaten ausstatten (zun�chst mit Hover-Schriftgr�sse um die Dimensionen berechnen zu k�nnen)
	      $cloudLink
	        .data('baseFont', cloudHeight)
	        .css({
	          float: 'left',
	          fontSize: (cloudHeight + o.animFontDiff) + o.fontUnit,  // zun�chst Hover-Schriftgr�sse
	          textAlign: 'center'
	        })
	        .mouseenter(function(){
	          var $this = $(this);
	          self._animator($this, $this.data('baseFont') + o.animFontDiff);
	        })
	        .mouseleave(function(){
	          var $this = $(this);
	          self._animator($this, $this.data('baseFont'));
	        });

        // Link mit Hover-Dimensionen auszeichnen und wieder die Ausgangsschriftgr�sse zuweisen
	      $cloudLink
	        .css({
	          width: $cloudLink.width() + "px",
            height: $cloudLink.height() + "px",
	          fontSize: $cloudLink.data('baseFont') + o.fontUnit
	        })
	        .show();

	    });

      // Element zum Herstellen des normalen Textflusses einbinden
	    $('<div />').css({
	      clear: 'both',
	      height: '1px',
	      lineHeight: '1px',
	      fontSize: '1px'
	    }).html(' ').appendTo(elem);
    },

    _getTagSizeLogarithmic: function(count){
    	var self = this,
      		o    = self.options
          digits = 2;

      return Math.round((Math.log(count - (self.tagMinCount - 1)) / self._contstant + o.fontMin)*Math.pow(10, digits))/Math.pow(10, digits);
	  },

	  _animator: function($this, fontSize){
	    $this.stop(true, true).animate({
	      fontSize: fontSize + this.options.fontUnit
	    }, this.options.animDuration, 'easeOutBounce', function() {
	      // Animation complete.
	    });
	  }
  });
})(jQuery);