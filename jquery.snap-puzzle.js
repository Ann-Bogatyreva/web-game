/*

	jQuery snapPuzzle v1.0.0

    Copyright (c) 2014 Hans Braxmeier / Simon Steinberger / Pixabay
    GitHub: https://github.com/Pixabay/jQuery-snapPuzzle

	License: http://www.opensource.org/licenses/mit-license.php

*/

(function($){
    $.fn.snapPuzzle = function(options){
        var o = $.extend({ pile: '', containment: 'document', rows: 5, columns: 5, onComplete: function(){} }, options);
