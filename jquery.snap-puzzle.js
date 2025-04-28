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
maxY = pile.height() - piece Height, 

                    puzzle_offset = that.closest('span').offset(),

                    pile_offset = pile.offset();



                if (options == 'destroy') {

                    $('.'+o.puzzle_class).remove();

                    that.unwrap().removeData('options');

                    pile.removeClass('snappuzzle-pile');

                } else if (options == 'refresh') {

                    $('.snappuzzle-slot.'+o.puzzle_class).each(function(){

                        var x_y = $(this).data('pos').split('_'), x = x_y[0], y = x_y[1];

                        $(this).css({

                            width: pieceWidth,

                            height: pieceHeight,

                            left: y*pieceWidth,

                            top: x*pieceHeight

                        });

                    });

                    $('.snappuzzle-piece.'+o.puzzle_class).each(function(){

                        if ($(this).data('slot')) {

                            // placed on slot

                            var x_y = $(this).data('slot').split('_'), slot_x = x_y[0], slot_y = x_y[1],

                                x_y = $(this).data('pos').split('_'), pos_x = x_y[0], pos_y = x_y[1];;

                            $(this).css({

                                width: pieceWidth,

                                height: pieceHeight, 
			
