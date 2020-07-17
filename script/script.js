  var rock_colors = ['green', //0
                     'maroon',//1
                     'yellow',//2
                     'brown', //3
                     'orange',//4
                     'red',   //5
                     'pink',  //6
                     'blue'   //7
  ];

  var contents = [
                 ['aaa-title', 6, 60],
                 ['img-01', 6, 26],
                 ['altmann-kari', 1, 47, 'Kari Altmann'],
                 ['amaya-juan', 7, 1, 'Juan Amaya'],
                 ['baij-jeff', 2, 24, 'Jeff Baij'],
                 ['bajagic-darja', 5, 46, 'Darja Bajagić'],
                 ['blagojevic-bosko', 3, 53, 'Boško Blagojević'],
                 ['img-02', 0, 16],
                 ['chan-jennifer', 5, 11, 'Jennifer Chan'],
                 ['cheng-ian', 7, 5, 'Ian Cheng'],
                 ['coburn-tyler', 4, 4, 'Tyler Coburn'],
                 ['cule-maja', 1, 20, 'Maja Cule'],
                 ['demarco-nick', 0, 55, 'Nick DeMarco'],
                 ['img-03', 4, 45],
                 ['dibeler-jake', 3, 41, 'Jake Dibeler'],
                 ['dolan-alex-mackin', 7, 43, 'Alex Mackin Dolan'],
                 ['domanovic-aleksandra', 2, 3, 'Aleksandra Domanović'],
                 ['duran-micaela-inti', 0, 31, 'Micaela Durand'],
                 ['erlanger-olivia', 2, 34, 'Olivia Erlanger'],
                 ['img-04', 0, 8],
                 ['faulkner-bs', 1, 25, 'BS Faulkner'],
                 ['fornieles-ed', 3, 27, 'Ed Fornieles'],
                 ['geronimas-lukas', 6, 19, 'Lukas Geronimas'],
                 ['grosche-julie', 2, 7, 'Julie Grosche'],
                 ['hale-ryan-whittier', 7, 57, 'Ryan Whittier Hale'],
                 ['img-05', 6, 28],
                 ['hallenbeck-travis', 2, 35, 'Travis Hallenbeck'],
                 ['havas-deanna', 0, 2, 'Deanna Havas'],
                 ['hirsch-ann', 6, 39, 'Ann Hirsch'],
                 ['holmberg-joel', 3, 6, 'Joel Holmberg'],
                 ['jaeger-elizabeth', 6, 9, 'Elizabeth Jaeger'],
                 ['img-06', 3, 50],
                 ['karilampi-ilja', 4, 18, 'Ilja Karilampi'],
                 ['kenny-devin', 7, 30, 'Devin Kenny'],
                 ['kotlyarenko-eugene', 3, 54, 'Eugene Kotlyarenko'],
                 ['lichty-stephen', 2, 49, 'Stephen Lichty'],
                 ['liftig-anya', 5, 23, 'Anya Liftig'],
                 ['img-07', 6, 37],
                 ['longo-spencer', 4, 13, 'Spencer Longo'],
                 ['lord-rachel', 1, 22, 'Rachel Lord'],
                 ['magrey-erica', 7, 10, 'Erica Magrey'],
                 ['mccafferty-kelly', 0, 58, 'Kelly McCafferty'],
                 ['obrien-nicholas', 1, 38, "Nicholas O'Brien"],
                 ['img-08', 6, 48],
                 ['olszewski-filip', 2, 15, 'Filip Olszewski'],
                 ['pearlman-annie', 7, 51, 'Annie Pearlman'],
                 ['peel-rebecca', 1, 40, 'Rebecca Peel'],
                 ['phelan-benjamin', 5, 56, 'Benjamin Phelan'],
                 ['sachs-melissa', 2, 17, 'Melissa Sachs'],
                 ['img-09', 6, 52],
                 ['schwulst-laurel', 0, 33, 'Laurel Schwulst'],
                 ['shen-sydney', 3, 42, 'Sydney Shen'],
                 ['silverman-hayley-aviva', 5, 12, 'Hayley Aviva Silverman'],
                 ['solano-manuel', 7, 29, 'Manuel Solano'],
                 ['soren-cameron', 6, 32, 'Cameron Soren'],
                 ['img-10', 3, 60],
                 ['spicero-jasper', 0, 14, 'Jasper Spicero'],
                 ['ulman-amalia', 4, 48, 'Amalia Ulman'],
                 ['wilson-andrew-norman', 2, 44, 'Andrew Norman Wilson'],
                 ['zzz-outro', 6, 61],
                 ['zzz-credits', 1, 21]
  ];

$(document).ready(function(){

  var ul = $('#side-column ul');

  for(var i = 0; i < contents.length; i++){
    var image_number = single_pad(contents[i][2]);
    var li = $('<li data-svg-number="'+image_number+'"><img src="rocks/'+image_number+'.svg"></li>');
    var rock_color = rock_colors[contents[i][1]];
    li.addClass(rock_color).attr('data-color', rock_color);
    li.addClass(rock_color).attr('data-contents-id', i);
    if(contents[i][3] != undefined){
      li.attr('data-name', contents[i][3]);
    }
    ul.append(li);
  }

  $('#side-column ul li').first().addClass('current');

  $('#side-column, #main-column').on('mousewheel', function(){
    if($(this).is(':animated')){
      $(this).stop();
    }
  });

  //var scrollTimes = 0;

  ul.find('li').on('click', function(){
    var old_current = $('.current');
    $('.current').removeClass('current');
    //old_current.find('path, polyline, polygon').attr('stroke-width', 2);
    var color = old_current.find('svg').css('fill');
    //old_current.find('path, polyline, polygon').attr('stroke', color);
    old_current.addClass('visited');
    $('.title').remove();
    var el = $(this);
    var num = el.attr('data-svg-number');
    var id = el.attr('data-contents-id');
    el.removeClass('visited').addClass('current');
    el.find('path, polyline, polygon').attr('stroke-width', 0);
    var timer = setTimeout(function(){
    $('body').css('opacity', 0.5);
    $('body').append('<div id="lock"></div>');
    }, 150)
    $.get('content/'+contents[parseInt(id)][0]+'.html', function(html){
      clearTimeout(timer);
      $('#lock').remove();
      $('body').css('opacity', 1);
      $('.content').html(html);
      $('.content a').click(function(){$(this).addClass('visited')});
      $('#main-column').animate({scrollTop: 0}, 500);
      //if(scrollTimes <= 1){
        //scrollTimes++;
        $('#side-column').animate({scrollTop: (el.offset().top + $('#side-column').scrollTop())}, 500);
      //} else {
        //$('#side-column').scrollTop(el.offset().top + $('#side-column').scrollTop());
      //}
      // setTimeout(function(){$('#keyboard-arrows').animate({opacity: 0}, 1000);}, 4000);
      window.location.hash = id;


      if(el.attr('data-contents-id') == 60){
        var ul = $('.index');
        console.log(ul);

        $('[data-name]').each(function(){
          var li = $('<li></li>');
          li.attr('class', $(this).attr('class'));
          li.append($(this).find('svg').clone());
          li.append('<a class="index-link" href="#'+$(this).attr("data-contents-id")+'">'+$(this).attr('data-name')+'</a>');
          ul.append(li);
        });

      }

      /* // Lightbox Overlay & Interstitial Rocks
      $('.overlay').click(function(){
        $('body').append("<div id='overlay'></div>");
        $('#overlay').html('<img src="'+$(this).attr('href')+'">');
        if($(this).hasClass('darja')){
          $('#overlay img').addClass('darja');
        }
        $('#overlay').addClass(el.attr('data-color'));
        el.removeClass('current');
        $('#overlay').css('background-color', el.css('color'));
        $('#overlay').css({visibility: 'visible'});
        $('#overlay').click(function(){
          $(this).css({visibility: 'hidden'});
          $(this).remove();
        });
        return false;
      });

      if($('.content .interstitial').length > 0){
        el.removeClass('current');
        $('.interstitial').css('background-color', el.css('color'));
        $('#side-column').css({opacity:0, visibility: 'hidden'});
        $('#main-column').css({width: '100%', left: 0});
      }

      $('.interstitial').click(function(){
        $('#side-column').css({visibility: '', opacity: ''});
        $('#main-column').css({width: '', left: ''});
        var li = $('li[data-contents-id='+(parseInt(id))+']');
        li.addClass('visited');
        $('li[data-contents-id='+(parseInt(id)+1)+']').trigger('click');
      });
      */

    });
  });

  make_svgs_inline();

  $(window).on('hashchange', function(){
    if(window.location.hash == '' || window.location.hash == '#'){
      window.location.hash = '#0';
    }
    $('#side-column').stop();
    $('#main-column').stop();
    $('#overlay').trigger('click');
    $('#side-column').css({visibility: '', opacity: ''});
    $('#main-column').css({width: '', left: ''});
    $('li[data-contents-id='+window.location.hash.slice(1)+']').trigger('click');
  });
  
  $('html').keydown(function(e){
	if(e.keyCode == 39){
	  $('.arrow-key').addClass('pressed');
	}
	// if(e.keyCode == 40){
	  // $('.arrow-key').text('▶').addClass('down');;
	// }
  });

  $('html').keyup(function(e){
    $('.arrow-key').removeClass('pressed');
    $('.arrow-key').text('▶').removeClass('down');
    var current = parseInt(window.location.hash.slice(1));
    var new_current = current;
    switch(e.keyCode){
      case 37: //left
        new_current-=1;
        break;
      case 39: //right
        new_current+=1;
        break;
    }
    if(e.keyCode == 37 || e.keyCode == 39){
      if(new_current == contents.length){
        new_current = 0;
      }else if(new_current == -1){
        new_current = contents.length -1;
      }
      window.location.hash = '#'+new_current;
    }
  });
  
  $('.arrow-key').mousedown(function() {
    $(this).addClass('pressed');
  });
  
  $('.arrow-key').mouseup(function() {
    $(this).removeClass('pressed');
    e = $.Event('keyup');
    e.keyCode = 39;
    $('html').trigger(e);
  });

});

var current_svg = 0;
var all_svgs = [];

var single_pad = function(n){
  return (n < 10 ? '0' : '') + n;
}

var make_svgs_inline = function(){
  for(var i = 0; i < contents.length; i++){
    all_svgs.push($('li[data-contents-id='+i+']'));
  }
  make_svg_inline_recursive(all_svgs[current_svg]);
};

var make_svg_inline_recursive = function(el){

  var $img = $(el).find('img');
  var $parent = $(el);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');

  $.get(imgURL, function(data) {
    var $svg = $(data).find('svg');
    if(typeof imgID !== 'undefined') {
      $svg = $svg.attr('id', imgID);
    }
    if(typeof imgClass !== 'undefined') {
      $svg = $svg.attr('class', imgClass+' replaced-svg');
    }
    $svg = $svg.removeAttr('xmlns:a');

    $img.replaceWith($svg);

    // $(el).find('svg').css('padding', '2px');

    $parent.show();
    current_svg += 1;

    if(current_svg >= contents.length){
      if(window.location.hash == ''){
        window.location.hash = '#0';
      } else if(window.location.hash.length > 0){
        $('li[data-contents-id='+window.location.hash.slice(1)+']').trigger('click');
      }
      return true;
    } else {
      make_svg_inline_recursive(all_svgs[current_svg])
    }

  }, 'xml');

};

/*
 * Adapted from "Replace all SVG images with inline SVG".
 * from: (http://stackoverflow.com/questions/11978995/how-to-change-color-of-svg-image-using-css-jquery-svg-image-replacement)
 */
