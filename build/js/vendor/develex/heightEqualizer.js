"use strict"

function dxHeightEqualizer(obj) {
    obj.run = obj.run || false;
    var id = obj.id;
    var maxHeight = [];

    this.is = function(){
        return $('*').is(id);
    }

    this.resize = function () {
        $(id).removeAttr('style');

        Math.max.apply(null, $(id).map(function () {
            var top = parseInt($(this).offset().top);
            var height = parseInt($(this).height());
            if (maxHeight[top] == undefined || maxHeight[top] < height)
                maxHeight[top] = height;
        }).get());

        $(id).map(function () {
            var top = parseInt($(this).offset().top);
            var height = parseInt($(this).height());
            if (maxHeight[top] != 0)
                $(this).height(maxHeight[top]);
        }).get();
    }.bind(this);

    if ( this.is() == false) return;

    if (obj.run) {
        window.addEventListener("resize", function(){
            this.resize();
        }.bind(this));
        this.resize();
    }
}


