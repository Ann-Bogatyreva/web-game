/*

	jQuery snapPuzzle v1.0.0

    Copyright (c) 2014 Hans Braxmeier / Simon Steinberger / Pixabay
    GitHub: https://github.com/Pixabay/jQuery-snapPuzzle

	License: http://www.opensource.org/licenses/mit-license.php

*/

(function($){
     $.fn.snapPuzzle = function(options){
        var o = $.extend({ pile: '', containment: 'document', rows: 5, columns: 5, onComplete: function(){} }, options);
        // public methods

        if (typeof options == 'string') {

            this.each(function(){

                var that = $(this),
			
o = that.data('options'),
                    pieceWidth = that.width() / o.columns,
                    pieceHeight = that.height() / o.rows,
                    pile = $(o.pile),
                    maxX = pile.width() - pieceWidth,

			
